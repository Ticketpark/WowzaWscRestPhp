<?php declare(strict_types=1);

namespace Ticketpark\Wsc\Request;

trait RequestCommonsTrait
{
    public function getApiPath(): string
    {
        $apiPath = self::API_PATH;

        if ($this instanceof IdRequestInterface) {
            $apiPath = str_replace('{id}', $this->getId(), $apiPath);
        }

        return $apiPath;
    }

    public function getResponseClass(): string
    {
        return self::RESPONSE_CLASS;
    }
}