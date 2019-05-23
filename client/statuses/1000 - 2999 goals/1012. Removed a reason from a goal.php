<?php

use function compact as with;

status::matching ( 1012, function ( )
{
	$goalid = input::get ( 'goalid', '' );
	session::flash ( 'message', 'Reason removed from goal.' );
	return redirect::to ( "/goals/{$goalid}/reasons" );
} );

