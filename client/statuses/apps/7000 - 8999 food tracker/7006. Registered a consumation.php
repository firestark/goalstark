<?php

use function compact as with;

status::matching ( 7006, function ( )
{
	session::flash ( 'message', 'Consumation added.' );

	if ( session::get ( 'uri', '/' ) === '/apps/food-tracker/add' )
		return redirect::to ( '/apps/food-tracker/' );
	
	return redirect::back ( );
} );
