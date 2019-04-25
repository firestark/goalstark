<?php

use function compact as with;

status::matching ( 1007, function ( array $goals )
{
	usort ( $goals, function ( $a, $b )
	{
		if ( $a->rating === $b->rating )
			return 0;

		return ( $a->rating > $b->rating ) ? -1 : 1;
	} );
	
	return view::ok ( 'tasks.select-goal', with ( 'goals' ) );
} );
