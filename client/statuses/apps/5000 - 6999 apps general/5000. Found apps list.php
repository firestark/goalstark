<?php

use function compact as with;

status::matching ( 5000, function ( array $apps )
{
	return view::ok ( 'apps.list', with ( 'apps' ) );
} );
