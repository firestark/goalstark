<?php

status::matching ( 9005, function ( $scheme_id )
{
    session::flash ( 'message', 'Routine added.' );
	return redirect::to ( '/apps/fitness/' . $scheme_id );
} );
