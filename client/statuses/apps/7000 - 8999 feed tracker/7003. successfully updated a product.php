<?php

use function compact as with;

status::matching ( 7003, function ( product $product )
{
	session::flash ( 'message', 'Successfully updated product.' );
	return redirect::to ( '/apps/food-tracker/products' );
} );
