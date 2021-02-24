<?php declare(strict_types=1);

namespace Ticketpark\Wsc\Request\LiveStreamState;

use Ticketpark\Wsc\Request\IdRequestInterface;
use Ticketpark\Wsc\Request\IdRequestTrait;
use Ticketpark\Wsc\Request\Request;
use Ticketpark\Wsc\Request\RequestCommonsTrait;
use Ticketpark\Wsc\Response\LiveStreamState\FetchResponse;

class ResetRequest extends Request implements IdRequestInterface
{
    const API_PATH = '/live_streams/{id}/reset';
    const RESPONSE_CLASS = FetchResponse::class;

    use RequestCommonsTrait;
    use IdRequestTrait;

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_PUT;
    }
}
