<?php
require __DIR__. '/Mushroom.php';

class Basket
{
    const SIZE = 500;
    private $contents;

    public function __construct()
    {
        $this->contents = array();
    }

    public function addMushroom(Mushroom $mushroom)
    {
        if ($this->checkMushroom($mushroom))
            array_push($this->contents, $mushroom);
    }

    public function checkMushroom(Mushroom $subject)
    {
        if (!$subject->isEdible())
        {
            return false;
            echo 'inedible<br>';
        }

        if ($subject->isRotten())
        {
            return false;
            echo 'rotten<br>';
        }

        return true;
    }

    public function getMushrooms()
    {
        print_r($this->contents);
    }

    public function isFull()
    {
        $totalWeight = 0;
        for($i = 0; $i < sizeof($this->contents); $i++)
        {
            $totalWeight += $this->contents[$i]->getWeight();
        }

        if($totalWeight >= self::SIZE)
            return true;

        return false;
    }
}