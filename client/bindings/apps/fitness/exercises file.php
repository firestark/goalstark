<?php

app::share ( 'exercises file', function ( $app )
{
	return __DIR__ . '/../../../storage/databases/files/exercises.data';
} );