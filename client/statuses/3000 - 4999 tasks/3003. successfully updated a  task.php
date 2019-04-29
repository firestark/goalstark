<?php

status::matching ( 3003, function ( )
{
	session::flash ( 'message', 'Updated task.' );
	return redirect::to ( '/tasks/' );
} );
