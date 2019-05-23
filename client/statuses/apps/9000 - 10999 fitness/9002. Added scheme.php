<?php

status::matching ( 9002, function ( )
{
    session::flash ( 'message', 'Scheme added.' );
	return redirect::to ( '/apps/fitness/' );
} );
