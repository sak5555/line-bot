<?php



require "vendor/autoload.php";

$access_token = 'wFVBWNJeV4Sqay8itVL2k00Jtwtmmz6kwEu759xpoD8/wfq4fvySswNfb0jjAJ4/hf80a/577NYd04yCVVgMF6C1rRhj870I5hfAeehGphGS0Hth5B0EWxp0WZWtcfP3Y7AdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'b4480097e0fcaa769';

$pushID = '59baf808e0f87c2d4';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('ทดสอบ hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







