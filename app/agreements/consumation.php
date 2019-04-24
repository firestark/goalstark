<?php

class consumation
{
    public $id, $product, $date;

    public function __construct ( $id, product $product )
    {
        $this->id       = $id;
        $this->product  = $product;
        $this->date     = time ( );
    }
}