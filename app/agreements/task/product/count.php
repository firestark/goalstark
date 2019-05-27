<?php

namespace task\product;

use consumation;
use product;

class count extends \task\daily
{
    public $product = null;
    public $times = 0;

    function __construct ( $id, product $product, int $times )
    {
        $this->product = $product;
        $this->times = $times;
        $description = "Consume {$product->name}";

        parent::__construct ( $id, $description );
    }

    function __toString ( )
    {
        return $this->description;
    }
}