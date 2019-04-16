<?php

app::share ( 'tasks', function ( $app )
{
	$tasks = unserialize ( file_get_contents ( $app [ 'tasks file' ] ) );

	if ( ! is_array ( $tasks ) )
		$tasks = [ ];

	return $tasks;
} );
