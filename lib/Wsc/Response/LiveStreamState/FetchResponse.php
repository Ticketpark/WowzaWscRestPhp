<?php declare(strict_types=1);

namespace Ticketpark\Wsc\Response\LiveStreamState;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\Wsc\Container\LiveStreamState;
use Ticketpark\Wsc\Response\ResponseInterface;

class FetchResponse implements ResponseInterface
{
    /**
     * @var LiveStreamState
     * @SerializedName("live_stream")
     * @Type("Ticketpark\Wsc\Container\LiveStreamState")
     */
    protected $liveStreamState;

    public function getLiveStreamState(): ?LiveStreamState
    {
        return $this->liveStreamState;
    }

    public function setLiveStreamState(LiveStreamState $liveStreamState): self
    {
        $this->liveStreamState = $liveStreamState;

        return $this;
    }
}
