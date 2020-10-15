<?php
include_once "Queue.php";

$queue = new queue(4);
$queue->add("hunghung");
$queue->add("hung12");
$queue->add("hungml123");
//$queue->push(2002);
echo "<pre>";
$queue->pop();
var_dump($queue);
