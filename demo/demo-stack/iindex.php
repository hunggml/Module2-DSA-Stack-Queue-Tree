<?php
include_once "ReadingList.php";

$testStack = new ReadingList(5);

$testStack->push("hung18t");
$testStack->push("hung.0606");
$testStack->push("hung_0602");


$testStack->pop();
$testStack->isFull();

