<?php

use function compact as with;

status::matching ( 7006, function ( )
{
	session::flash ( 'message', 'Consumation added.' );

	if ( session::get ( 'uri', '/' ) === '/tasks/?' )
		return redirect::back ( );
	
	return redirect::to ( '/apps/food-tracker/' );
} );
