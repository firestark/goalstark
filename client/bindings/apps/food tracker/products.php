<?php

app::share ( 'products', function ( $app )
{
	$products = unserialize ( file_get_contents ( $app [ 'products file' ] ) );

	if ( ! is_array ( $products ) )
		$products = [ ];

	return $products;
} );
