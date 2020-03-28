<?php declare(strict_types=1);

namespace Ticketpark\Wsc\Tests\Request\LiveStreamState;

use Ticketpark\Wsc\Request\LiveStreamState\StartRequest;
use Ticketpark\Wsc\Response\LiveStreamState\FetchResponse;
use Ticketpark\Wsc\Tests\Request\CommonRequestTest;

class StartRequestTest extends CommonRequestTest
{
    public function testErrorResponse(): void
    {
        parent::doTestErrorResponse(StartRequest::class);
    }

    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            StartRequest::class,
            FetchResponse::class
        );
    }
}
