<?php declare(strict_types=1);

namespace Ticketpark\Wsc\Tests\Request\LiveStream;

use Ticketpark\Wsc\Request\LiveStream\DeleteRequest;
use Ticketpark\Wsc\Response\LiveStream\DeleteResponse;
use Ticketpark\Wsc\Tests\Request\CommonRequestTest;

class DeleteRequestTest extends CommonRequestTest
{
    public function testErrorResponse(): void
    {
        parent::doTestErrorResponse(DeleteRequest::class);
    }

    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            DeleteRequest::class,
            DeleteResponse::class
        );
    }
}
