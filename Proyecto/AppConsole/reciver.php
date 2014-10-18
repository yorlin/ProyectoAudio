<?php

require_once __DIR__ . '/vendor/autoload.php';
use PhpAmqpLib\Connection\AMQPConnection;

$connection = new AMQPConnection('localhost', 5672, 'guest', 'guest');
$channel = $connection->channel();
$ffmpeg = FFMpeg\FFMpeg::create();
$video = $ffmpeg->open('/home/yorlin/Downloads/Saratoga - Maldito Corazon.mp3');
$ffprobe = FFMpeg\FFProbe::create();
echo $ffprobe
    ->format('/home/yorlin/Downloads/Saratoga - Maldito Corazon.mp3') // extracts file informations
    ->get('duration');    
$channel->queue_declare('hello', false, false, false, false);

echo ' [*] Waiting for messages. To exit press CTRL+C', "\n";

$callback = function($msg) {
  echo " [x] Received ", $msg->body, "\n";
};

$channel->basic_consume('hello', '', false, true, false, false, $callback);

while(count($channel->callbacks)) {
    $channel->wait();
}

$channel->close();
$connection->close();

?>