<?php declare(strict_types=1);

namespace Ticketpark\Wsc\Request\LiveStreamState;

use Ticketpark\Wsc\Request\Request;
use Ticketpark\Wsc\Request\RequestCommonsTrait;
use Ticketpark\Wsc\Response\LiveStreamState\FetchResponse;

class StartRequest extends Request
{
    const API_PATH = '/live_streams/{id}/start';
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
        return self::HTTP_METHOD_PUT;
    }
}
