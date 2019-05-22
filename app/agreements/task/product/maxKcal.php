<?php

namespace task\product;

use consumation;
use product;

class maxKcal extends \task\daily
{
    public $kcal = 0;

    function __construct ( $id, int $kcal )
    {
        $this->kcal = $kcal;
        $description = "Stay under {$kcal} kcal.";

        parent::__construct ( $id, $description );
    }

    function complete ( )
    {
        
    }
}