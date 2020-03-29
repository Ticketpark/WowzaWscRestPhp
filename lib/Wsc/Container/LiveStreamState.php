<?php declare(strict_types=1);

namespace Ticketpark\Wsc\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class LiveStreamState
{
    const STATE_STARTED = "started";
    const STATE_STOPPED = "stopped";
    const STATE_STARTING = "starting";
    const STATE_STOPPING = "stopping";
    const STATE_RESETTING = "resetting";

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

    public function isStarted(): bool
    {
        return $this->state === self::STATE_STARTED;
    }

    public function isStopped(): bool
    {
        return $this->state === self::STATE_STOPPED;
    }

    public function isStarting(): bool
    {
        return $this->state === self::STATE_STARTING;
    }

    public function isStopping(): bool
    {
        return $this->state === self::STATE_STOPPING;
    }

    public function isResetting(): bool
    {
        return $this->state === self::STATE_RESETTING;
    }
}
