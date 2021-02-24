<?php declare(strict_types=1);

namespace Ticketpark\Wsc\Request\LiveStream;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\Wsc\Container\LiveStream;
use Ticketpark\Wsc\Request\IdRequestInterface;
use Ticketpark\Wsc\Request\IdRequestTrait;
use Ticketpark\Wsc\Request\Request;
use Ticketpark\Wsc\Request\RequestCommonsTrait;
use Ticketpark\Wsc\Response\LiveStream\FetchResponse;

class UpdateRequest extends Request implements IdRequestInterface
{
    const API_PATH = '/live_streams/{id}';
    const RESPONSE_CLASS = FetchResponse::class;

    use RequestCommonsTrait;
    use IdRequestTrait;

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

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_PATCH;
    }
}
