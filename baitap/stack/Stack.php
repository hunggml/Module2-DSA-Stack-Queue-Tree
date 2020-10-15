<?php


class Stack
{
    public $stack;
    public $limit;

    public function __construct($limit)
    {
        $this->stack = array();
        $this->limit = $limit;
    }

    public function push($item)
    {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $item);
        } else {
            echo "Stack is full";
        }
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            echo "Stack is empty";
        } else {
            array_shift($this->stack);
        }

    }

}