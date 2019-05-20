<?php

app::share ( 'schemes', function ( $app )
{
	$schemes = unserialize ( file_get_contents ( $app [ 'schemes file' ] ) );

	if ( ! is_array ( $schemes ) )
		$schemes = [ ];

	return $schemes;
} );
