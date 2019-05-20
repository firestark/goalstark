<?php

app::share ( 'exercises', function ( $app )
{
	$exercises = unserialize ( file_get_contents ( $app [ 'exercises file' ] ) );

	if ( ! is_array ( $exercises ) )
		$exercises = [ ];

	return $exercises;
} );
