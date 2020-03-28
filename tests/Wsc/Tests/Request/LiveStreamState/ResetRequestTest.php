<?php declare(strict_types=1);

namespace Ticketpark\Wsc\Tests\Request\LiveStreamState;

use Ticketpark\Wsc\Request\LiveStreamState\ResetRequest;
use Ticketpark\Wsc\Response\LiveStreamState\FetchResponse;
use Ticketpark\Wsc\Tests\Request\CommonRequestTest;

class ResetRequestTest extends CommonRequestTest
{
    public function testErrorResponse(): void
    {
        parent::doTestErrorResponse(ResetRequest::class);
    }

    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            ResetRequest::class,
            FetchResponse::class
        );
    }
}
