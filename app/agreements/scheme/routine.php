<?php

namespace scheme;

use exercise;

class routine
{
    public $id, $exercise, $sets, $reps;

    function __construct ( $id, exercise $exercise, int $sets, int $reps )
    {
        $this->id = $id;
        $this->exercise = $exercise;
        $this->sets = $sets;
        $this->reps = $reps;
    }
}