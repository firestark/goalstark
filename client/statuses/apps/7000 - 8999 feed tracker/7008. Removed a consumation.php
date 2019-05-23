<?php

status::matching ( 7008, function ( )
{
	session::flash ( 'message', 'Removed consumation.' );
	return redirect::back ( );
} );
