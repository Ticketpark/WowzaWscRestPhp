<?php declare(strict_types=1);

use Ticketpark\Wsc\Request\LiveStreamState\StartRequest;
use Ticketpark\Wsc\Response\ErrorResponse;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';


// Start a live stream
// https://api.docs.cloud.wowza.com/v1.5/tag/live_streams#operation/startLiveStream

$response = (new StartRequest($apiKey, $accessKey, false))
    ->setId('xxx') // id of a live stream
    ->execute();

if ($response instanceof ErrorResponse) {
    print 'Error: ' . $response->getMeta()->getMessage();
} else {
    print_r($response->getLiveStreamState());
}



