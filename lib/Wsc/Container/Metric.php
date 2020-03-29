<?php declare(strict_types=1);

namespace Ticketpark\Wsc\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Metric
{
    /**
     * @var string
     * @SerializedName("status")
     * @Type("string")
     */
    private $status;

    /**
     * @var string
     * @SerializedName("text")
     * @Type("string")
     */
    private $text;

    /**
     * @var string
     * @SerializedName("units")
     * @Type("string")
     */
    private $units;

    /**
     * @var float
     * @SerializedName("value")
     * @Type("float")
     */
    private $value;

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getUnits(): ?string
    {
        return $this->units;
    }

    public function setUnits(string $units): self
    {
        $this->units = $units;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(float $value): self
    {
        $this->value = $value;

        return $this;
    }
}
