<?php

status::matching ( 1008, function ( )
{
	session::flash ( 'message', 'Tasks added.' );
	return redirect::back ( );
} );
