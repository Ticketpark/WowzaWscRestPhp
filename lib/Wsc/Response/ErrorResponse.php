<?php declare(strict_types=1);

namespace Ticketpark\Wsc\Response;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\Wsc\Container\Meta;

class ErrorResponse implements ResponseInterface
{
    /**
     * @var Meta
     * @SerializedName("meta")
     * @Type("Ticketpark\Wsc\Container\Meta")
     */
    private $meta;

    /**
     * @var string
     * @SerializedName("request_id")
     * @Type("string")
     */
    private $requestId;

    /**
     * @var \DateTime
     * @SerializedName("request_timestamp")
     * @Type("DateTimeImmutable<'Y-m-d\TH:i:s.uT'>")
     */
    private $requestTimestamp;

    public function getMeta(): ?Meta
    {
        return $this->meta;
    }

    public function setMeta(Meta $meta): self
    {
        $this->meta = $meta;

        return $this;
    }

    public function getRequestId(): ?string
    {
        return $this->requestId;
    }

    public function setRequestId(string $requestId): self
    {
        $this->requestId = $requestId;

        return $this;
    }

    public function getRequestTimestamp(): ?\DateTime
    {
        return $this->requestTimestamp;
    }

    public function setRequestTimestamp(\DateTime $requestTimestamp): self
    {
        $this->requestTimestamp = $requestTimestamp;

        return $this;
    }
}
