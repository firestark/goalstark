<?php

app::share ( 'goals', function ( $app )
{
	$goals = unserialize ( file_get_contents ( $app [ 'goals file' ] ) );

	if ( ! is_array ( $goals ) )
		$goals = [ ];

	return $goals;
} );
