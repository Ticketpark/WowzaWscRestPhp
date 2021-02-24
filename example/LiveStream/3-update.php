<?php declare(strict_types=1);

use Ticketpark\Wsc\Container\LiveStream;
use Ticketpark\Wsc\Request\LiveStream\UpdateRequest;
use Ticketpark\Wsc\Response\ErrorResponse;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';


// Update a live stream
// https://api.docs.cloud.wowza.com/v1.5/tag/live_streams#operation/updateLiveStream

$liveStream = (new LiveStream())
    ->setId('xxx') // id of a live stream
    ->setName('My updated stream');

$response = (new UpdateRequest($apiKey, $accessKey, false))
    ->setLiveStream($liveStream)
    ->execute();

if ($response instanceof ErrorResponse) {
    print 'Error: ' . $response->getMeta()->getMessage();
} else {
    print_r($response->getLiveStream());
}



