<?php

class Mushroom
{
    private $edible;
    private $rotten;
    private $weight;

    public function __construct()
    {
        $this->edible = (bool)rand(0, 1);
        $this->rotten = (bool)rand(0, 1);
        $this->weight = rand(5, 45);
    }

    public function isEdible()
    {
        return $this->edible;
    }

    public function isRotten()
    {
        return $this->rotten;
    }

    public function getWeight()
    {
        return $this->weight;
    }
}