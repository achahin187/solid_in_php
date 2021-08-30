<?php



require __DIR__ . '/../vendor/autoload.php';

$players=[];
for($index=1;$index<5;$index++){
    array_push($players,new \classes\attackPlayer());
}
for($index=1;$index<5;$index++){
    array_push($players,new \classes\defencePlayer());
}
array_push($players,new \classes\keepingPlayer());


$team = new \classes\team($players);

$team->start();





