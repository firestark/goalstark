<?php

app::share ( 'tokens file', function ( $app )
{
	return __DIR__ . '/../../storage/databases/files/tokens.data';
} );
