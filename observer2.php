<?php

$redis = new Redis();
$redis->connect('127.0.0.1', 6379);

$redis->subscribe(array('khabib'), function($redis, $channel, $msg) {

    if ($msg === 'exit') {
      die();
    }


    print_r($msg.'   ');

});
?>
