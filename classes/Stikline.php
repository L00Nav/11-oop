<?php

class Stikline
{
    private $volume;
    private $amount;

    public function __construct(int $volume)
    {
        $this->volume = $volume;
        $this->amount = 0;
    }

    public function pourIn(int $amount)
    {
        $this->amount += $amount;

        $excess = $this->amount - $this->volume;
        if ($excess < 0)
            $excess = 0;
        
        if ($this->amount > $this->volume)
            $this->amount = $this->volume;

        if ($this->amount === $this->volume)
            echo 'Glass is full!<br>';

        if ($excess)
            echo "$excess has spilled onto the table!<br>";

        echo "The glass now contains $this->amount millibuckets.<br>";
    }

    public function pourOut()
    {
        $amount = $this->amount;
        $this->amount = 0;
        return $amount;
    }
}