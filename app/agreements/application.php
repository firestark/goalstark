<?php

class application
{
    public $title, $uri;

    function __construct ( string $title, string $uri )
    {
        $this->title = $title;
        $this->uri = $uri;
    }
}