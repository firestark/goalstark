<?php

status::matching ( 9006, function ( $scheme_id )
{
    session::flash ( 'message', 'Routine removed.' );
	return redirect::to ( '/apps/fitness/' . $scheme_id );
} );
