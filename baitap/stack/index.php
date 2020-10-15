<?php
include_once "Stack.php";

$stack = new Stack(4);
$stack->push(22);
$stack->push("fhfd");
$stack->push(12);
$stack->push("hung");

echo "<pre/>";
var_dump($stack);
