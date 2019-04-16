<?php

status::matching ( 3007, function ( )
{
	session::flash ( 'message', 'Removed task.' );
	return redirect::back ( );
} );
