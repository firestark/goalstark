<?php

status::matching ( 4000, function ( )
{
	session::flash ( 'message', 'Task could not be found.' );
	return redirect::to ( '/tasks/' );
} );
