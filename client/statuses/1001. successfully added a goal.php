<?php

use function compact as with;


status::matching ( 1001, function ( goal $goal )
{
	session::flash ( 'message', 'Successfully added goal.' );
	return redirect::to ( '/' );
} );
