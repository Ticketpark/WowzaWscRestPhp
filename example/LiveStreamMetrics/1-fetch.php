<?php declare(strict_types=1);

use Ticketpark\Wsc\Request\LiveStreamMetrics\FetchRequest;
use Ticketpark\Wsc\Response\ErrorResponse;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';


// Fetch the metrics of a live stream
// https://api.docs.cloud.wowza.com/v1.5/tag/live_streams#operation/showLiveStreamStats

$response = (new FetchRequest($apiKey, $accessKey, false))
    ->setId('xxx') // id of a live stream
    ->execute();

if ($response instanceof ErrorResponse) {
    print 'Error: ' . $response->getMeta()->getMessage();
} else {
    print_r($response->getLiveStreamMetrics());
}



