<?php

namespace task\product;

use consumation;
use product;

class maxKcal extends \task\daily
{
    public $kcal = 0;

    function __construct ( array $goals, $id, int $kcal )
    {
        $this->kcal = $kcal;
        $description = "Stay under {$kcal} kcal.";

        parent::__construct ( $goals, $id, $description );
    }

    function complete ( )
    {
        
    }
}