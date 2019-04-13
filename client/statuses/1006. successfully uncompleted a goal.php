<?php

status::matching ( 1006, function ( goal $goal )
{
	session::flash ( 'message', 'Goal uncompleted.' );
	return redirect::back ( );
} );
