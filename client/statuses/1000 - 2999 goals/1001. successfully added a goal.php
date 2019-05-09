<?php

status::matching ( 1001, function ( $id )
{
	session::flash ( 'message', 'Goal added.' );
	return redirect::to ( "/goals/{$id}" );
} );
