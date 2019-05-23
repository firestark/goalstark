<?php

status::matching ( 3003, function ( $goalid )
{
	session::flash ( 'message', 'Updated task.' );
	return redirect::to ( "/goals/{$goalid}/tasks" );
} );
