<?php

status::matching ( 1007, function ( )
{
	session::flash ( 'message', 'Task removed.' );
	return redirect::back ( );
} );
