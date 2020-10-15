<?php

class Queue
{
    private $queue;
    private $next;


    public function __construct($next)
    {
        $this->queue = array();
        $this->next = $next;

    }

    public function isEmpty()
    {
        return empty($this->queue);
    }

    public function add($item)
    {
        if (count($this->queue) < $this->next) {
            array_unshift($this->queue, $item);
        } else {
            echo "queue is Full";
        }
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            echo "queue is empty";
        } else {
            array_pop($this->queue);
        }
    }


}