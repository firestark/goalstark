<?php

app::share ( 'products file', function ( $app )
{
	return __DIR__ . '/../../../storage/databases/files/products.data';
} );