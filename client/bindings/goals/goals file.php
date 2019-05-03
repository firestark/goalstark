<?php

app::share ( 'goals file', function ( $app )
{
	$directory = __DIR__ . '/../../storage/databases/files/' . $app [ 'credentials' ]->username;
	$file = 'goals.data';

	if ( ! is_dir ( $directory ) )
		mkdir ( $directory, 0777, true );

	if ( ! file_exists ( $directory . '/' . $file ) )
		fopen ( $directory . '/' . $file, 'w' );

	return $directory . '/' . $file;
} );