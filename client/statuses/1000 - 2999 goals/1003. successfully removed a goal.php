<?php

status::matching ( 1003, function ( )
{
	session::flash ( 'message', 'Goal removed.' );
	return redirect::to ( '/goals/' );
} );
