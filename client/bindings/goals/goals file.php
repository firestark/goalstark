<?php

app::share ( 'goals file', function ( $app )
{
	return __DIR__ . '/../../storage/databases/files/goals.data';
} );