<?php declare(strict_types=1);

namespace Ticketpark\Wsc\Tests\Request\LiveStream;

use Ticketpark\Wsc\Request\LiveStream\CreateRequest;
use Ticketpark\Wsc\Response\LiveStream\FetchResponse;
use Ticketpark\Wsc\Tests\Request\CommonRequestTest;

class CreateRequestTest extends CommonRequestTest
{
    public function testErrorResponse(): void
    {
        parent::doTestErrorResponse(CreateRequest::class);
    }

    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            CreateRequest::class,
            FetchResponse::class
        );
    }
}
