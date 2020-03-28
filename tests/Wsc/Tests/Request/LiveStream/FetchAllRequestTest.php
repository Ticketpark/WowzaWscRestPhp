<?php declare(strict_types=1);

namespace Ticketpark\Wsc\Tests\Request\LiveStream;

use Ticketpark\Wsc\Request\LiveStream\FetchAllRequest;
use Ticketpark\Wsc\Response\LiveStream\FetchAllResponse;
use Ticketpark\Wsc\Tests\Request\CommonRequestTest;

class FetchAllRequestTest extends CommonRequestTest
{
    public function testErrorResponse(): void
    {
        parent::doTestErrorResponse(FetchAllRequest::class);
    }

    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            FetchAllRequest::class,
            FetchAllResponse::class
        );
    }
}
