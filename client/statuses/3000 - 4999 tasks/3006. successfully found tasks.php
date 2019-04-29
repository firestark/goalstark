<?php

use function compact as with;

status::matching ( 3006, function ( array $tasks )
{
	$protein = 0;

	if ( app::bound ( 'dietitian' ) )
	{
		$consumations = app::make ( 'dietitian' )->today ( );
		
		foreach ( $consumations as $consumation )
			$protein += $consumation->product->nutrition->protein;
	}


	$tasks = array_reverse ( $tasks );
	return view::ok ( 'tasks.list', with ( 'tasks', 'protein' ) );
} );