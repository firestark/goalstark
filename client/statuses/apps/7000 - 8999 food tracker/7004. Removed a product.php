<?php

status::matching ( 7004, function ( )
{
	session::flash ( 'message', 'Removed product.' );
	return redirect::back ( );
} );
