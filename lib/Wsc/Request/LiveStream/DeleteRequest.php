<?php declare(strict_types=1);

namespace Ticketpark\Wsc\Request\LiveStream;

use Ticketpark\Wsc\Request\Request;
use Ticketpark\Wsc\Request\RequestCommonsTrait;
use Ticketpark\Wsc\Response\LiveStream\DeleteResponse;

class DeleteRequest extends Request
{
    const API_PATH = '/live_streams/{id}';
    const RESPONSE_CLASS = DeleteResponse::class;

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
        return self::HTTP_METHOD_DELETE;
    }
}
