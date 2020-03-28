<?php declare(strict_types=1);

namespace Ticketpark\Wsc\Response\LiveStreamMetrics;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\Wsc\Container\LiveStreamMetrics;
use Ticketpark\Wsc\Response\ResponseInterface;

class FetchResponse implements ResponseInterface
{
    /**
     * @var LiveStreamMetrics
     * @SerializedName("live_stream")
     * @Type("Ticketpark\Wsc\Container\LiveStreamMetrics")
     */
    protected $liveStreamMetrics;

    public function getLiveStreamMetrics(): ?LiveStreamMetrics
    {
        return $this->liveStreamMetrics;
    }

    public function setLiveStreamMetrics(LiveStreamMetrics $liveStreamMetrics): self
    {
        $this->liveStreamMetrics = $liveStreamMetrics;

        return $this;
    }
}
