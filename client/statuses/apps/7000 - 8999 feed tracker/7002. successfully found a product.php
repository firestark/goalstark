<?php

use function compact as with;

status::matching ( 7002, function ( product $product )
{
	view::title ( $product->name );
	return view::ok ( 'apps.food-tracker.products.edit', with ( 'product' ) );
} );
