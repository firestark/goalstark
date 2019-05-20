<?php

class application
{
    public $title, $uri, $icon;

    function __construct ( string $title, string $uri, string $icon )
    {
        $this->title = $title;
        $this->uri = $uri;
        $this->icon = $icon;
    }
}