<?php declare(strict_types=1);

namespace Ticketpark\Wsc\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class LiveStreamState
{
    /**
     * @var string
     * @SerializedName("state")
     * @Type("string")
     */
    private $state;

    /**
     * @var string
     * @SerializedName("ip_address")
     * @Type("string")
     */
    private $ipAddress;

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(string $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    public function setIpAddress(string $ipAddress): self
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }
}
