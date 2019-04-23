<?php

class flatfileDietitian implements dietitian
{
    private $products, $file;

    function __construct ( string $file, array $products )
    {
        $this->file = $file;
        $this->products = $products;
    }

    function add ( product $product )
    {
        $this->products [ $product->name ] = $product;
        $this->write ( );
    }

    function all ( ) : array
    {
        return $this->products;
    }

    function has ( product $product ) : bool
    {
        return isset ( $this->products [ $product->name ] );
    }

    function find ( product $product ) : product
    {
        $this->check ( $product );
        return $this->products [ $product->name ];
    }

    function update ( product $product )
    {
        $this->check ( $product );
        $this->products [ $product->name ] = $product;
        $this->write ( );
    }

    function remove ( product $product )
    {
        $this->check ( $product );
        unset ( $this->products [ $product->name ] );
        $this->write ( );
    }

    private function write ( )
	{
		file_put_contents ( $this->file, serialize ( $this->products ) );
    }

    private function check ( product $product )
    {
        if ( ! isset ( $this->products [ $product->name ] ) )
            throw new \exception ( "A product with name: {$product->name} does not exist." );
    }
}