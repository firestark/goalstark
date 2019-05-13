<?php

status::matching ( 1008, function ( )
{
	session::flash ( 'message', 'Goal tasks updated.' );
	return redirect::to ( '/goals/' . input::get ( 'goalid', '' ) . '/tasks' );
} );