<?php

status::matching ( 1003, function ( )
{
	session::flash ( 'message', 'Successfully removed goal.' );
	return redirect::to ( '/goals/' );
} );
