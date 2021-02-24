<?php declare(strict_types=1);

use Ticketpark\Wsc\Request\LiveStream\FetchAllRequest;
use Ticketpark\Wsc\Response\ErrorResponse;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';


// Fetch all live streams
// https://api.docs.cloud.wowza.com/current/tag/live_streams#operation/listLiveStreams

$response = (new FetchAllRequest($apiKey, $accessKey, false))
    ->execute();

if ($response instanceof ErrorResponse) {
    print 'Error: ' . $response->getMeta()->getMessage();
} else {
    print_r($response->getLiveStreams());
}
