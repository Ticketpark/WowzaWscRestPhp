<?php
declare(strict_types=1);

namespace Ticketpark\Wsc\Request;

trait IdRequestTrait
{
    /**
     * @var string
     */
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(string $id): Request
    {
        $this->id = $id;

        return $this;
    }
}