<?php

app::share ( 'goals file', function ( $app )
{
	$directory = __DIR__ . '/../../storage/databases/files/' . md5 ( $app [ 'credentials' ]->username );
	$file = 'goals.data';
	return $directory . '/' . $file;
} );