<?php

status::matching ( 3000, function ( $id )
{
	session::flash ( 'message', 'Task added.' );
	return redirect::to ( '/goals/' . $id );
} );
