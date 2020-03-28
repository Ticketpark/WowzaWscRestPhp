<?php declare(strict_types=1);

namespace Ticketpark\Wsc\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class StreamTarget
{
    /**
     * @var string
     * @SerializedName("id")
     * @Type("string")
     */
    private $id;

    /**
     * @var string
     * @SerializedName("name")
     * @Type("string")
     */
    private $name;

    /**
     * @var string
     * @SerializedName("primary_url")
     * @Type("string")
     */
    private $primary_url;

    /**
     * @var string
     * @SerializedName("provider")
     * @Type("string")
     */
    private $provider;

    /**
     * @var string
     * @SerializedName("stream_name")
     * @Type("string")
     */
    private $streamName;

    /**
     * @var \DateTime
     * @SerializedName("created_at")
     * @Type("DateTimeImmutable<'Y-m-d\TH:i:s.uT'>")
     */
    private $createdAt;

    /**
     * @var \DateTime
     * @SerializedName("updated_at")
     * @Type("DateTimeImmutable<'Y-m-d\TH:i:s.uT'>")
     */
    private $updatedAt;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;
        
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        
        return $this;
    }

    public function getPrimaryUrl(): ?string
    {
        return $this->primary_url;
    }

    public function setPrimaryUrl(string $primary_url): self
    {
        $this->primary_url = $primary_url;
        
        return $this;
    }

    public function getProvider(): ?string
    {
        return $this->provider;
    }

    public function setProvider(string $provider): self
    {
        $this->provider = $provider;
        
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

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;
        
        return $this;
    }

    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        
        return $this;
    }
}
