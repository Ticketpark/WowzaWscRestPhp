<?php declare(strict_types=1);

namespace Ticketpark\Wsc\Request\LiveStream;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\Wsc\Container\LiveStream;
use Ticketpark\Wsc\Request\Request;
use Ticketpark\Wsc\Request\RequestCommonsTrait;
use Ticketpark\Wsc\Response\LiveStream\FetchResponse;

class UpdateRequest extends Request
{
    const API_PATH = '/live_streams/{id}';
    const RESPONSE_CLASS = FetchResponse::class;

    use RequestCommonsTrait;

    /**
     * @var LiveStream
     * @SerializedName("live_stream")
     * @Type("Ticketpark\Wsc\Container\LiveStream")
     */
    protected $liveStream;

    public function getLiveStream(): ?LiveStream
    {
        return $this->liveStream;
    }

    public function setLiveStream(LiveStream $liveStream): self
    {
        $this->liveStream = $liveStream;

        return $this;
    }

    private function getId(): ?string
    {
        if (null !== $this->liveStream) {
            return $this->liveStream->getId();
        }

        return null;
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_PATCH;
    }
}
