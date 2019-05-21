<?php

use function compact as with;

status::matching ( 7006, function ( )
{
	session::flash ( 'message', 'Consumation added.' );
	return redirect::to ( '/apps/food-tracker/' );
} );
