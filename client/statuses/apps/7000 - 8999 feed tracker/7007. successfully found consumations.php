<?php

use function compact as with;

status::matching ( 7007, function ( array $consumations )
{
	return view::ok ( 'apps.food-tracker.list', with ( 'consumations' ) );
} );
