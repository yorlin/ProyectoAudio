<?php
use PhpAmqpLib\Connection\AMQPConnection;
use PhpAmqpLib\Message\AMQPMessage;
class Helpers {
    public static function Convert($message) {
        
		$connection = new AMQPConnection('localhost', 5672, 'guest', 'guest');
		$channel = $connection->channel();

		$channel->queue_declare('hello', false, false, false, false);
		$msg = new AMQPMessage("");
		$channel->basic_publish($msg, '', 'gg');
		echo " [x] Sent 'Message!'\n";

		$channel->close();
		$connection->close();
    }
}
Helpers::Convert("");