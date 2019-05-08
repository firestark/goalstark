<?php

status::matching ( 1002, function ( )
{
	session::flash ( 'message', 'Successfully updated goal.' );
	return redirect::to ( '/goals/' );
} );
