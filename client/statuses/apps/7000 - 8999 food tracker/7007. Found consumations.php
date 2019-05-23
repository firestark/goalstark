<?php

use function compact as with;

status::matching ( 7007, function ( array $consumations )
{
	$kcal = 0;
	
	foreach ( $consumations as $consumation )
		$kcal += $consumation->product->nutrition->kcal;

	return view::ok ( 'apps.food-tracker.list', with ( 'consumations', 'kcal' ) );
} );
