<?php

class Pinigine
{
    private $notes;
    private $coins;

    public function __construct()
    {
        $this->notes = array();
        $this->coins = array();
    }

    public function add(int $amount)
    {
        if ($amount > 2)
            array_push($this->notes, $amount);
        else
            array_push($this->coins, $amount);
    }

    public function count()
    {
        $coinSum = 0;
        $noteSum = 0;
        for ($i = 0; $i < sizeof($this->coins); $i++)
        {
            $coinSum += $this->coins[$i];
        }
        for ($i = 0; $i < sizeof($this->notes); $i++)
        {
            $noteSum += $this->notes[$i];
        }
        
        echo "Notes: ". sizeof($this->notes). "  Total value: $noteSum<br>";
        echo "Coins: ". sizeof($this->coins). "  Total value: $coinSum<br>";
    }

    public function countCoins()
    {
        $coinSum = 0;
        for ($i = 0; $i < sizeof($this->coins); $i++)
        {
            $coinSum += $this->coins[$i];
        }
        
        echo "Coins: ". sizeof($this->coins). "  Total value: $coinSum<br>";
    }

    public function countNotes()
    {
        $noteSum = 0;
        for ($i = 0; $i < sizeof($this->notes); $i++)
        {
            $noteSum += $this->notes[$i];
        }
        
        echo "Notes: ". sizeof($this->notes). "  Total value: $noteSum<br>";
    }
}