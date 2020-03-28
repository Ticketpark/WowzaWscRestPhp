<?php declare(strict_types=1);

namespace Ticketpark\Wsc\Tests\Request\LiveStreamState;

use Ticketpark\Wsc\Request\LiveStreamState\StopRequest;
use Ticketpark\Wsc\Response\LiveStreamState\FetchResponse;
use Ticketpark\Wsc\Tests\Request\CommonRequestTest;

class StopRequestTest extends CommonRequestTest
{
    public function testErrorResponse(): void
    {
        parent::doTestErrorResponse(StopRequest::class);
    }

    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            StopRequest::class,
            FetchResponse::class
        );
    }
}
