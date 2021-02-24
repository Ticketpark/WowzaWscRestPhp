<?php
declare(strict_types=1);

namespace Ticketpark\Wsc\Request;

interface IdRequestInterface
{
    public function getId(): ?string;

    public function setId(string $id): Request;
}