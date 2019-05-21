<?php

status::matching ( 9001, function ( )
{
    session::flash ( 'message', 'Exercise removed.' );
	return redirect::to ( '/apps/fitness/exercises/' );
} );
