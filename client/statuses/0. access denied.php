<?php

use function compact as with;


status::matching ( 0, function ( )
{
	return redirect::to ( '/login' );
} );
