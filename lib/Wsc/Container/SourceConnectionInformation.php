<?php declare(strict_types=1);

namespace Ticketpark\Wsc\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class SourceConnectionInformation
{
    /**
     * @var string
     * @SerializedName("primary_server")
     * @Type("string")
     */
    private $primaryServer;

    /**
     * @var int
     * @SerializedName("host_port")
     * @Type("int")
     */
    private $hostPort;

    /**
     * @var string
     * @SerializedName("stream_name")
     * @Type("string")
     */
    private $streamName;

    /**
     * @var bool
     * @SerializedName("disableAuthentication")
     * @Type("bool")
     */
    private $disable_authentication;

    /**
     * @var string
     * @SerializedName("username")
     * @Type("string")
     */
    private $username;

    /**
     * @var string
     * @SerializedName("password")
     * @Type("string")
     */
    private $password;

    public function getPrimaryServer(): ?string
    {
        return $this->primaryServer;
    }

    public function setPrimaryServer(string $primaryServer): self
    {
        $this->primaryServer = $primaryServer;
        
        return $this;
    }

    public function getHostPort(): ?int
    {
        return $this->hostPort;
    }

    public function setHostPort(int $hostPort): self
    {
        $this->hostPort = $hostPort;
        
        return $this;
    }

    public function getStreamName(): ?string
    {
        return $this->streamName;
    }

    public function setStreamName(string $streamName): self
    {
        $this->streamName = $streamName;
        
        return $this;
    }

    public function isDisableAuthentication(): ?bool
    {
        return $this->disable_authentication;
    }

    public function setDisableAuthentication(bool $disable_authentication): self
    {
        $this->disable_authentication = $disable_authentication;
        
        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;
        
        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;
        
        return $this;
    }
}
