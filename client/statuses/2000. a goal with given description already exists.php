<?php

use function compact as with;


status::matching ( 2000, function ( )
{
	session::flash ( 'message', 'Given goal already exists' );
	return redirect::back ( );
} );
