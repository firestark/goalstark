<?php

status::matching ( 7004, function ( product $product )
{
	session::flash ( 'message', 'Removed product.' );
	return redirect::back ( );
} );
