<?php

use function compact as with;

status::matching ( 1010, function ( array $reasons )
{
	$goalid = input::get ( 'goalid', '' );
	return view::ok ( 'goals.reasons.list', with ( 'goalid', 'reasons' ) );
} );

