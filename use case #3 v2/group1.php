<?php

class group1
{
    public string $name;
    public float $score;
    public float $totalScore1;
    public float $averageScore1;

    function __construct($name, $score)
    {
        $this->name = $name;
        $this->score = $score;
    }
    public function averageScore1()
    {
        foreach ($this as $key => $value) {
        }
    }
}
