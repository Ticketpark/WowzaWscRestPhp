<?php declare(strict_types=1);

use Ticketpark\Wsc\Container\LiveStream;
use Ticketpark\Wsc\Request\LiveStream\CreateRequest;
use Ticketpark\Wsc\Response\ErrorResponse;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';


// Create a live stream
// https://sandbox.cloud.wowza.com/api/current/docs#operation/createLiveStream

$liveStream = (new LiveStream())
    ->setName('My test stream')
    ->setAspectRatioHeight(1080)
    ->setAspectRatioWidth(1920)
    ->setBillingMode(LiveStream::BILLING_MODE_PAY_AS_YOU_GO)
    ->setBroadcastLocation(LiveStream::BROADCAST_LOCATION_EU_GERMANY)
    ->setEncoder(LiveStream::ENCODER_OTHER_RTMP)
    ->setPlayerResponsive(true)
    ->setDisableAuthentication(true);

$response = (new CreateRequest($apiKey, $accessKey, false))
    ->setLiveStream($liveStream)
    ->execute();


if ($response instanceof ErrorResponse) {
    print 'Error: ' . $response->getMeta()->getMessage();
} else {
    print_r($response->getLiveStream());
}




