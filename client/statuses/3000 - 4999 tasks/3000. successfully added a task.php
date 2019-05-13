<?php

status::matching ( 3000, function ( )
{
	session::flash ( 'message', 'Task added.' );

	if ( substr ( request::uri ( ), 0, 7 )  === '/goals/' )
		return redirect::to ( '/goals/' . input::get ( 'goalid', '' ) . '/tasks' );

	
	return redirect::to ( '/tasks/' );
} );
