<?php declare(strict_types=1);

namespace Ticketpark\Wsc\Request;

use Doctrine\Common\Annotations\AnnotationRegistry;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use Ticketpark\Wsc\Exception\HttpRequestException;
use Ticketpark\Wsc\Response\ErrorResponse;
use Ticketpark\Wsc\Response\ResponseInterface;

abstract class Request
{
    const HTTP_METHOD_GET = 'get';
    const HTTP_METHOD_POST = 'post';
    const HTTP_METHOD_PATCH = 'patch';
    const HTTP_METHOD_DELETE = 'delete';
    const HTTP_METHOD_PUT = 'put';

    const ROOT_URL = 'https://api.cloud.wowza.com/api/v1.5';
    const ROOT_URL_TEST = 'https://api-sandbox.cloud.wowza.com/api/v1.5';

    const ERROR_RESPONSE_CLASS = ErrorResponse::class;

    /**
     * @var string
     * @Exclude
     */
    protected $apiKey;

    /**
     * @var string
     * @Exclude
     */
    protected $accessKey;

    /**
     * @var bool
     * @Exclude
     */
    protected $test = false;

    /**
     * @var \GuzzleHttp\Client
     * @Exclude
     */
    protected $client;

    public function __construct(
        string $apiKey,
        string $accessKey,
        bool $test = true
    ) {
        $this->apiKey = $apiKey;
        $this->accessKey = $accessKey;
        $this->test = $test;
    }

    abstract public function getApiPath(): string;
    abstract public function getResponseClass(): string;
    abstract public function getHttpMethod(): string;

    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    public function setApiKey(string $apiKey): self
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    public function getAccessKey(): string
    {
        return $this->accessKey;
    }

    public function setAccessKey(string $accessKey): self
    {
        $this->accessKey = $accessKey;

        return $this;
    }

    public function isTest(): bool
    {
        return $this->test;
    }

    public function setTest(bool $test): self
    {
        $this->test = $test;

        return $this;
    }

    public function setClient(Client $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getClient(): Client
    {
        if (null == $this->client) {
            return new Client();
        }

        return $this->client;
    }

    public function execute(): ResponseInterface
    {
        $expectedHttpStatus = 200;

        try {
            if (self::HTTP_METHOD_GET == $this->getHttpMethod()) {
                $response = $this->getClient()->get(
                    $this->getUrl(),
                    [
                        'headers' => $this->getHeaders()
                    ]
                );

            } elseif (self::HTTP_METHOD_DELETE == $this->getHttpMethod()) {
                $response = $this->getClient()->delete(
                    $this->getUrl(),
                    [
                        'headers' => $this->getHeaders()
                    ]
                );
                $expectedHttpStatus = 204;

            } elseif (self::HTTP_METHOD_PATCH == $this->getHttpMethod()) {
                $response = $this->getClient()->patch(
                    $this->getUrl(),
                    [
                        'headers' => $this->getHeaders(),
                        'body' => $this->getContent()
                    ]
                );

            } elseif (self::HTTP_METHOD_PUT == $this->getHttpMethod()) {
                $response = $this->getClient()->put(
                    $this->getUrl(),
                    [
                        'headers' => $this->getHeaders(),
                        'body' => $this->getContent()
                    ]
                );

            } else {
                $response = $this->getClient()->post(
                    $this->getUrl(),
                    [
                        'headers' => $this->getHeaders(),
                        'body' => $this->getContent()
                    ]
                );
                $expectedHttpStatus = 201;
            }
        } catch (\Exception $e) {
            if ($e instanceof ClientException) {
                $response = $e->getResponse();
            } else {
                throw $e;
            }
        }

        $statusCode = $response->getStatusCode();

        if ($statusCode >= 400 && $statusCode < 500) {
            return $this->getSerializer()->deserialize(
                (string) $response->getBody(),
                self::ERROR_RESPONSE_CLASS,
                'json'
            );
        }

        if ($expectedHttpStatus !== $statusCode) {
            throw new HttpRequestException(sprintf(
                'Unexpected http request response with status code %s.',
                $response->getStatusCode()
            ));
        }

        $body = (string) $response->getBody();

        if ('' === $body) {
            $class = $this->getResponseClass();
            return new $class();
        }

        return $this->getSerializer()->deserialize(
            (string) $response->getBody(),
            $this->getResponseClass(),
            'json'
        );
    }

    protected function getQueryParameters(): array
    {
        return [];
    }

    protected function getUrl(): string
    {
        $rootUrl = self::ROOT_URL;

        if ($this->isTest()) {
            $rootUrl = self::ROOT_URL_TEST;
        }

        $url = $rootUrl . $this->getApiPath();

        if ($this->getQueryParameters()) {
            $queryString = http_build_query($this->getQueryParameters());
            $url .= '?' . $queryString;
        }

        return $url;
    }

    protected function getHeaders(): array
    {
        return [
            'Content-Type'  => 'application/json; charset=utf-8',
            'Accept'        => 'application/json',
            'wsc-api-key' => $this->apiKey,
            'wsc-access-key' => $this->accessKey
        ];
    }

    protected function getContent(): string
    {
        return $this->getSerializer()->serialize($this, 'json');
    }

    protected function getSerializer(): SerializerInterface
    {
        AnnotationRegistry::registerLoader('class_exists');

        return SerializerBuilder::create()->build();
    }
}
