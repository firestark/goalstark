<?php

app::share ( 'tasks file', function ( $app )
{
	return __DIR__ . '/../../storage/databases/files/tasks.data';
} );