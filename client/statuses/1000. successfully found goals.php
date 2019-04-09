<?php

use function compact as with;


status::matching ( 1000, function ( array $goals )
{
	usort ( $goals, function ( goal $a, goal $b )
	{
		if ( $a->completeBy === $b->completeBy )
			return 0;

		return ( $a->completeBy < $b->completeBy ) ? 1 : -1;
	} );

	if ( request::header ( 'Content-Type' ) === 'application/json' )
		return json::ok ( array_values ( $goals ) );

	return view::ok ( 'listing', with ( 'goals' ) );
} );
