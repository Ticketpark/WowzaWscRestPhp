<?php declare(strict_types=1);

namespace Ticketpark\Wsc\Response\LiveStream;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\Wsc\Container\LiveStream;
use Ticketpark\Wsc\Response\ResponseInterface;

class FetchResponse implements ResponseInterface
{
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
}
