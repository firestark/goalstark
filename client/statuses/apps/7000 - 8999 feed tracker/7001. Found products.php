<?php

use function compact as with;

status::matching ( 7001, function ( array $products )
{
	return view::ok ( 'apps.food-tracker.products.list', with ( 'products' ) );
} );
