<?php

use function compact as with;

status::matching ( 3006, function ( array $today, array $later )
{
	$today = array_reverse ( $today );
	$later = array_reverse ( $later );
	return view::ok ( 'tasks.list', with ( 'today', 'later' ) );
} );