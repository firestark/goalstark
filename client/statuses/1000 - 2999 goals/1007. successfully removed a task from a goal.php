<?php

status::matching ( 1007, function ( )
{
	session::flash ( 'message', 'Task removed from goal.' );
	return redirect::back ( );
} );
