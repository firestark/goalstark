<?php

app::share ( 'tasks file', function ( $app )
{
	$directory = __DIR__ . '/../../storage/databases/files/' . md5 ( $app [ 'credentials' ]->username );
	$file = 'tasks.data';
	return $directory . '/' . $file;
} );