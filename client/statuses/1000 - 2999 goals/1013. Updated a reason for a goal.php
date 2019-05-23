<?php

use function compact as with;

status::matching ( 1013, function ( )
{
	$goalid = input::get ( 'goalid', '' );
	session::flash ( 'message', 'Reason updated for goal.' );
	return redirect::to ( "/goals/{$goalid}/reasons" );
} );

