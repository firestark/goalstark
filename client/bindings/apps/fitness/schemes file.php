<?php

app::share ( 'schemes file', function ( $app )
{
	$directory = __DIR__ . '/../../../storage/databases/files/' . md5 ( $app [ 'credentials' ]->username );
	$file = 'schemes.data';
	return $directory . '/' . $file;
} );