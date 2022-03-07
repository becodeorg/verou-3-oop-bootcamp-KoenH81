<?php

class Vacancy{
    public string $title;
    public string $text;

    function __construct($title, $text){

        $this->title = $title;
        $this->text = $text;
    }
}