<?php

namespace task\product;

use consumation;
use product;

class count extends \task\due
{
    public $product = null;
    public $times = 0;

    function __construct ( $id, product $product, int $times, int $due )
    {
        $this->product = $product;
        $this->times = $times;
        $description = "Eat {$product->name}";

        parent::__construct ( $id, $description, $due );
    }

    function __toString ( )
    {
        return uniqid ( );
    }
}