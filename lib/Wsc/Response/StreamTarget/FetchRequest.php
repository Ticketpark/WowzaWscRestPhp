<?php declare(strict_types=1);

namespace Ticketpark\Wsc\Response\StreamTarget;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\Wsc\Container\StreamTarget;
use Ticketpark\Wsc\Response\ResponseInterface;

class FetchResponse implements ResponseInterface
{
    
    private $name;

    private $primary_url;

    private $provider;

    private $streamName;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getPrimaryUrl(): ?string
    {
        return $this->primary_url;
    }

    public function getProvider(): ?string
    {
        return $this->provider;
    }

    public function getStreamName(): ?string
    {
        return $this->streamName;
    }

}
