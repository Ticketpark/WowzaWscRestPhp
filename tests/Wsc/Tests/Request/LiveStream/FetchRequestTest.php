<?php declare(strict_types=1);

namespace Ticketpark\Wsc\Tests\Request\LiveStream;

use Ticketpark\Wsc\Request\LiveStream\FetchRequest;
use Ticketpark\Wsc\Response\LiveStream\FetchResponse;
use Ticketpark\Wsc\Tests\Request\CommonRequestTest;

class FetchRequestTest extends CommonRequestTest
{
    public function testErrorResponse(): void
    {
        parent::doTestErrorResponse(FetchRequest::class);
    }

    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            FetchRequest::class,
            FetchResponse::class
        );
    }
}
