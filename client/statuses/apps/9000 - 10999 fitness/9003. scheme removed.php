<?php

status::matching ( 9003, function ( )
{
    session::flash ( 'message', 'Scheme removed.' );
	return redirect::to ( '/apps/fitness' );
} );
