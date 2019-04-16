<?php

use function compact as with;

status::matching ( 1000, function ( array $goals )
{
	$goals = array_reverse ( $goals );
	return view::ok ( 'goals.list', with ( 'goals' ) );
} );
