<?php

use function compact as with;

status::matching ( 7005, function ( array $products )
{
	return view::ok ( '/apps/food-tracker/select-product', with ( 'products' ) );
} );
