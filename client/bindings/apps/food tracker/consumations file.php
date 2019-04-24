<?php

app::share ( 'consumations file', function ( $app )
{
	return __DIR__ . '/../../../storage/databases/files/consumations.data';
} );