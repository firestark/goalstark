<?php

app::share ( 'consumations file', function ( $app )
{
	$directory = __DIR__ . '/../../../storage/databases/files/' . $app [ 'credentials' ]->username;
	$file = 'consumations.data';

	return $directory . '/' . $file;
} );