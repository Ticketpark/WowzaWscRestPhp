<?php declare(strict_types=1);

use Ticketpark\Wsc\Request\LiveStream\FetchAllRequest;
use Ticketpark\Wsc\Request\LiveStream\FetchRequest;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';


// Fetch all live streams
// https://api.docs.cloud.wowza.com/v1.5/tag/live_streams#operation/listLiveStreams

$response = (new FetchAllRequest($apiKey, $accessKey, false))
    ->execute();

$liveStreams = $response->getLiveStreams();


// Fetch details of first result
// https://api.docs.cloud.wowza.com/v1.5/tag/live_streams#operation/showLiveStream

$response = (new FetchRequest($apiKey, $accessKey, false))
    ->setId('lsxpkmhj')
    ->execute();


print_r($response->getLiveStream());



