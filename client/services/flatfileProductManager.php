<?php

class flatfileProductManager implements productManager
{
    private $products, $file;

    function __construct ( string $file, array $products )
    {
        $this->file = $file;
        $this->products = $products;
    }

    function add ( product $product )
    {
        $this->products [ $product->id ] = $product;
        $this->write ( );
    }

    function all ( ) : array
    {
        return $this->products;
    }

    function has ( product $product ) : bool
    {
        return isset ( $this->products [ $product->id ] );
    }

    function find ( product $product ) : product
    {
        $this->check ( $product );
        return $this->products [ $product->id ];
    }

    function update ( product $product )
    {
        $this->check ( $product );
        $this->products [ $product->id ] = $product;
        $this->write ( );
    }

    function remove ( product $product )
    {
        $this->check ( $product );
        unset ( $this->products [ $product->id ] );
        $this->write ( );
    }

    private function write ( )
	{
		file_put_contents ( $this->file, serialize ( $this->products ) );
    }

    private function check ( product $product )
    {
        if ( ! isset ( $this->products [ $product->id ] ) )
            throw new \exception ( "A product with id: {$product->id} does not exist." );
    }
}