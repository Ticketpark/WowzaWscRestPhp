<?php declare(strict_types=1);

namespace Ticketpark\Wsc\Request\StreamTarget;

use Ticketpark\Wsc\Request\Request;
use Ticketpark\Wsc\Request\RequestCommonsTrait;
use Ticketpark\Wsc\Response\StreamTarget\FetchResponse;

class FetchRequest extends Request
{
    const API_PATH = '/stream_sources/wowza/{id}';
    const RESPONSE_CLASS = FetchResponse::class;

    use RequestCommonsTrait;

    /**
     * @var string
     */
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_GET;
    }
}
