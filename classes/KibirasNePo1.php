<?php
require __DIR__ . '/Kibiras3.php';

class KibirasNePo1 extends Kibiras2
{
    public function add1Rock()
    {
        $this->rockAmount += rand(2, 5);
    }
}