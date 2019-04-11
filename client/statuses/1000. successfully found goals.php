<?php

use function compact as with;


status::matching ( 1000, function ( array $goals )
{
	$goals = array_reverse ( $goals );
	
	if ( request::header ( 'Content-Type' ) === 'application/json' )
		return json::ok ( array_values ( $goals ) );

	return view::ok ( 'listing', with ( 'goals' ) );
} );
