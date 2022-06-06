<?php

class Satellite
{
    public static Satellite $one;
    public static Satellite $two;

    private $title;

    private function __construct()
    {
        
    }

    public static function create()
    {
        if (!isset(self::$one))
        {
            self::$one = new self;
            self::$one->title = "Deimos";
            return self::$one;
        }
        
        if (!isset(self::$two))
        {
            self::$two = new self;
            self::$two->title = "Phobos";
            return self::$two;
        }
        
        if (rand(0, 1))
            return self::$one;
        else
            return self::$two;
        
    }

    public function getTitle()
    {
        return $this->title;
    }
}