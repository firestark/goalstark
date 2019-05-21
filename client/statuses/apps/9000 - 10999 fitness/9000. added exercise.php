<?php

status::matching ( 9000, function ( )
{
    session::flash ( 'message', 'Added exercise.' );
	return redirect::to ( '/apps/fitness/exercises/' );
} );
