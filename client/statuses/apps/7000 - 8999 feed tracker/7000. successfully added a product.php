<?php

status::matching ( 7000, function ( )
{
    session::flash ( 'message', 'Added product.' );
	return redirect::to ( '/apps/food-tracker/products' );
} );
