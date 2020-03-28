<?php declare(strict_types=1);

namespace Ticketpark\Wsc\Tests\Request\LiveStream;

use Ticketpark\Wsc\Request\LiveStream\UpdateRequest;
use Ticketpark\Wsc\Response\LiveStream\FetchResponse;
use Ticketpark\Wsc\Tests\Request\CommonRequestTest;

class UpdateRequestTest extends CommonRequestTest
{
    public function testErrorResponse(): void
    {
        parent::doTestErrorResponse(UpdateRequest::class);
    }

    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            UpdateRequest::class,
            FetchResponse::class
        );
    }
}
