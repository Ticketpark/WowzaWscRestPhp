<?php declare(strict_types=1);

use Ticketpark\Wsc\Request\LiveStream\FetchRequest;
use Ticketpark\Wsc\Response\ErrorResponse;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';


// Fetch details of a single livestream
// https://api.docs.cloud.wowza.com/current/tag/live_streams#operation/showLiveStream

$response = (new FetchRequest($apiKey, $accessKey, false))
    ->setId('xxx')
    ->execute();


if ($response instanceof ErrorResponse) {
    print 'Error: ' . $response->getMeta()->getMessage();
} else {
    print_r($response->getLiveStream());
}
