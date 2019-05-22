<?php

status::matching ( 3000, function ( )
{
	session::flash ( 'message', 'Task added.' );
	return redirect::to ( '/goals/' );
} );
