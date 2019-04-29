<?php

use function compact as with;

status::matching ( 3009, function ( )
{
	session::flash ( 'message', 'Goal removed from task.' );
	return redirect::back ( );
} );
