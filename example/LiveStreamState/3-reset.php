<?php declare(strict_types=1);

use Ticketpark\Wsc\Request\LiveStreamState\ResetRequest;
use Ticketpark\Wsc\Response\ErrorResponse;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';


// Reset a live stream
// https://api.docs.cloud.wowza.com/current/tag/live_streams#operation/resetLiveStream

$response = (new ResetRequest($apiKey, $accessKey, false))
    ->setId('xxx') // id of a live stream
    ->execute();

if ($response instanceof ErrorResponse) {
    print 'Error: ' . $response->getMeta()->getMessage();
} else {
    print_r($response->getLiveStreamState());
}



