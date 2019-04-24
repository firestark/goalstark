<?php

app::share ( 'consumations', function ( $app )
{
	$consumations = unserialize ( file_get_contents ( $app [ 'consumations file' ] ) );

	if ( ! is_array ( $consumations ) )
		$consumations = [ ];

	return $consumations;
} );
