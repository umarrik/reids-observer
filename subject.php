<?php

$redis = new Redis();
$redis->connect('127.0.0.1', 6379);


for ($i=0; $i < 3; $i--) {
        $line = readline("Введите команду: ");
        if ($line === 'exit') {
          $redis->publish('khabib', $line);
          die;
        }
        $redis->publish('khabib', $line);
}



?>
