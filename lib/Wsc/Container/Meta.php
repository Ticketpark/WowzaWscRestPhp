<?php declare(strict_types=1);

namespace Ticketpark\Wsc\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Meta
{
    /**
     * @var int
     * @SerializedName("status")
     * @Type("int")
     */
    private $status;

    /**
     * @var string
     * @SerializedName("code")
     * @Type("string")
     */
    private $code;

    /**
     * @var string
     * @SerializedName("title")
     * @Type("string")
     */
    private $title;

    /**
     * @var string
     * @SerializedName("message")
     * @Type("string")
     */
    private $message;

    /**
     * @var string
     * @SerializedName("description")
     * @Type("string")
     */
    private $description;

    /**
     * @var string
     * @SerializedName("links")
     * @Type("array<string>")
     */
    private $links;

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getLinks(): ?string
    {
        return $this->links;
    }

    public function setLinks(string $links): self
    {
        $this->links = $links;

        return $this;
    }
}
