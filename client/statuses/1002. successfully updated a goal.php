<?php

use function compact as with;


status::matching ( 1002, function ( )
{
	session::flash ( 'message', 'Successfully updated goal.' );
	return redirect::to ( '/' );
} );
