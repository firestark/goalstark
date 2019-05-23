<?php

status::matching ( 1002, function ( )
{
	session::flash ( 'message', 'Goal updated.' );
	return redirect::to ( '/goals/' );
} );
