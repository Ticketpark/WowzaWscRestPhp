<?php declare(strict_types=1);

namespace Ticketpark\Wsc\Request\LiveStream;

use Ticketpark\Wsc\Request\IdRequestInterface;
use Ticketpark\Wsc\Request\IdRequestTrait;
use Ticketpark\Wsc\Request\Request;
use Ticketpark\Wsc\Request\RequestCommonsTrait;
use Ticketpark\Wsc\Response\LiveStream\FetchResponse;

class FetchRequest extends Request implements IdRequestInterface
{
    const API_PATH = '/live_streams/{id}';
    const RESPONSE_CLASS = FetchResponse::class;

    use RequestCommonsTrait;
    use IdRequestTrait;

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_GET;
    }
}
