<?php

status::matching ( 9004, function ( )
{
    session::flash ( 'message', 'Scheme updated.' );
	return redirect::to ( '/apps/fitness' );
} );
