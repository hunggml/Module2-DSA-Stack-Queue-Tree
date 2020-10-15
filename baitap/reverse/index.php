<?php
include_once "Stack.php";
$array =  [1,2,3,4,5];
$stack  = new Stack();

$stack->add($array);
echo "<pre>";
var_dump($stack->reverse($array));