<?php

status::matching ( 1008, function ( )
{
	session::flash ( 'message', 'Tasks edited.' );
	return redirect::to ( '/' . input::get ( 'goalid', '' ) . '/tasks' );
} );