<?php

use function compact as with;

status::matching ( 7003, function ( )
{
	session::flash ( 'message', 'Updated product.' );
	return redirect::to ( '/apps/food-tracker/products' );
} );
