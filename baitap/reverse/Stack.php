<?php


class Stack
{
    public $stack;

    public function __construct()
    {
        $this->stack = array();
    }

    public function add($arr)
    {
        return $this->stack = $arr;
    }

    public function reverse($arr)
    {
        return array_reverse($arr);
    }

}