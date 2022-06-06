<?php

class TennisPlayer
{
    private $name;
    private $ball;
    private static $player1;
    private static $player2;

    private function __construct(string $name)
    {
        $this->name = $name;
        $this->ball = false;
    }

    public static function create(string $name)
    {
        if (!isset(self::$player1))
        {
            self::$player1 = new self($name);
            return self::$player1;
        }
        
        if (!isset(self::$player2))
        {
            self::$player2 = new self($name);
            return self::$player2;
        }
        
        if (rand(0, 1))
            return self::$player1;
        else
            return self::$player2;
        
    }

    public function hasBall()
    {
        return $ball;
    }

    public function passBall()
    {
        if (!$this->ball)
        {
            echo "$this->name doesn't have the ball.<br>";
            return;
        }

        if ($this === self::$player1)
        {
            $this->ball = false;
            self::$player2->ball = true;
        }
            
        if ($this === self::$player2)
        {
            $this->ball = false;
            self::$player1->ball = true;
        }

        echo "$this->name passes the ball.<br>";
    }

    public static function gameStart()
    {
        self::$player1->ball = false;
        self::$player2->ball = false;

        if(rand(0, 1))
        {
            self::$player1->ball = true;
            echo "Game starts. ". self::$player1->name ." has the ball.<br>";
        }
        else
        {
            self::$player2->ball = true;
            echo "Game starts. ". self::$player2->name ." has the ball.<br>";
        }
    }
}