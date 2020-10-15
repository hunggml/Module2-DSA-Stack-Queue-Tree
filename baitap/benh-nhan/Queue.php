<?php


class Queue
{
    private $list;
    private $count;
    private $arr;

    public function __construct($list)
    {
        $this->arr = array();
        $this->list = $list;
    }

    public function add($patient)
    {
        if ($this->arr > $this->list) {
            array_unshift($this->arr, $patient);
            usort($this->arr,function ($firstCode,$lastCode){
               return $firstCode->code < $lastCode->code;
            });
        } else {
            echo "List Patient is full";
        }
    }

    public function isEmpty()
    {
        return empty($this->arr);
    }

    public function remove()
    {
        if ($this->isEmpty()) {
            echo "List Patient is empty";
        } else {
            array_pop($this->arr);
        }
    }

}