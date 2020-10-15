<?php
include_once "Queue.php";

$queue = new Queue(4);
$queue->push("hunghung");
$queue->push("hung12");
$queue->push("hungml123");
//$queue->push(2002);
echo "<pre>";
$queue->pop();
var_dump($queue);
