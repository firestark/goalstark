<?php

namespace task\product;

use consumation;
use product;

class count extends \task\count
{
    public $product = null;

    function __construct ( array $goals, $id, product $product, int $times, int $due, array $completions = [ ] )
    {
        $this->product = $product;
        $description = "Eat {$product->name}";

        parent::__construct ( $goals, $id, $description, $times, $due, $completions );
    }

    function complete ( )
    {
        $this->completions [ ] = new consumation ( uniqid ( ), $this->product );
    }
}