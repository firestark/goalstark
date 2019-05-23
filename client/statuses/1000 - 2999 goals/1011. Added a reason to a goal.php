<?php

use function compact as with;

status::matching ( 1011, function ( )
{
	$goalid = input::get ( 'goalid', '' );
	session::flash ( 'message', 'Added reason to goal.' );
	return redirect::to ( "/goals/{$goalid}/reasons" );
} );

