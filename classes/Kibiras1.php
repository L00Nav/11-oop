<?php

class Kibiras1
{
    protected $rockAmount;
    
    public function __construct()
    {
        $rockAmount = 0;
    }

    public function add1Rock()
    {
        $this->rockAmount++;
    }

    public function addManyRocks(int $Amount)
    {
        $this->rockAmount += $Amount;
    }

    public function getRockAmount()
    {
        return $this->rockAmount;
    }
}