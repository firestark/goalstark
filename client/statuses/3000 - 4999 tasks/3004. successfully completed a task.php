<?php

status::matching ( 3004, function ( )
{
	session::flash ( 'message', 'Task completed.' );
	return redirect::back ( );
} );
