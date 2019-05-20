<?php

namespace scheme;

class routine
{
    public $exercise, $sets, $reps;

    function __construct ( exercise $exercise, int $sets, int $reps )
    {
        $this->exercise = $exercise;
        $this->sets = $sets;
        $this->reps = $reps;
    }
}