<?php

class Kibiras2
{
    protected $rockAmount;
    static private $rocksInAllBuckets = 0;
    
    public function __construct()
    {
        $this->rockAmount = 0;
    }

    public function add1Rock()
    {
        $this->rockAmount++;
        Kibiras2::$rocksInAllBuckets++;
    }

    public function addManyRocks(int $Amount)
    {
        $this->rockAmount += $Amount;
        Kibiras2::$rocksInAllBuckets += $Amount;
    }

    public function getRockAmount()
    {
        return $this->rockAmount;
    }

    public function getAllRocks()
    {
        return Kibiras2::$rocksInAllBuckets;
    }

    static public function getAllStaticRocks()
    {
        return Kibiras2::$rocksInAllBuckets;
    }
}