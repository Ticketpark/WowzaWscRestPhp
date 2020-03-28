<?php declare(strict_types=1);

use Ticketpark\Wsc\Request\StreamTarget\FetchRequest;
use Ticketpark\Wsc\Response\ErrorResponse;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';


// Fetch a custom stream target
// https://sandbox.cloud.wowza.com/api/current/docs#operation/showCustomStreamTarget

$response = (new FetchRequest($apiKey, $accessKey, false))
    ->setId('xxx') // id of a stream target (e.q. to be found in `Livestream::getStreamTargets()`)
    ->execute();

if ($response instanceof ErrorResponse) {
    print_r($response);
} else {
    print_r($response->getStreamTarget());
}



