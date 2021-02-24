<?php declare(strict_types=1);

use Ticketpark\Wsc\Request\LiveStreamState\FetchRequest;
use Ticketpark\Wsc\Response\ErrorResponse;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';


// Fetch the state of a live stream
// https://api.docs.cloud.wowza.com/current/tag/live_streams#operation/showLiveStreamState

$response = (new FetchRequest($apiKey, $accessKey, false))
    ->setId('xxx') // id of a live stream
    ->execute();

if ($response instanceof ErrorResponse) {
    print 'Error: ' . $response->getMeta()->getMessage();
} else {
    print_r($response->getLiveStreamState());
}



