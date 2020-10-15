<?php
include_once "Patient.php";
include_once "Queue.php";

$patient1 = new Patient("Smith",5);
$patient2 = new Patient("Jones",4);
$patient3 = new Patient("Fehrenbach",6);
$patient4 = new Patient("Brown",1);
$patient5 = new Patient("Ingram",10);

$queue = new Queue(10);
$queue->add($patient1);
$queue->add($patient2);
$queue->add($patient3);
$queue->add($patient4);
$queue->add($patient5);
echo "<pre>";
var_dump($queue);
