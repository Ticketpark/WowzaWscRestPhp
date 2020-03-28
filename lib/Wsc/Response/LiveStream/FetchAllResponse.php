<?php declare(strict_types=1);

namespace Ticketpark\Wsc\Response\LiveStream;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\Wsc\Container\LiveStream;
use Ticketpark\Wsc\Response\ResponseInterface;

class FetchAllResponse implements ResponseInterface
{
    /**
     * @var LiveStream[]
     * @SerializedName("live_streams")
     * @Type("array<Ticketpark\Wsc\Container\LiveStream>")
     */
    protected $liveStreams;

    public function getLiveStreams(): ?array
    {
        return $this->liveStreams;
    }

    public function setLiveStreams(array $liveStreams)
    {
        $this->liveStreams = $liveStreams;
    }
}
