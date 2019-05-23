<?php

status::matching ( 1006, function ( )
{
	session::flash ( 'message', 'Goal uncompleted.' );
	return redirect::back ( );
} );
