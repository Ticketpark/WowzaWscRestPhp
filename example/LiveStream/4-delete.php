<?php declare(strict_types=1);

use Ticketpark\Wsc\Request\LiveStream\DeleteRequest;
use Ticketpark\Wsc\Response\ErrorResponse;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';


// Delete a live stream
// https://sandbox.cloud.wowza.com/api/current/docs#operation/deleteLiveStream

$response = (new DeleteRequest($apiKey, $accessKey, false))
    ->setId('xxx') // id of a live stream
    ->execute();

if ($response instanceof ErrorResponse) {
    print 'Error: ' . $response->getMeta()->getMessage();
} else {
    print 'Success!';
}