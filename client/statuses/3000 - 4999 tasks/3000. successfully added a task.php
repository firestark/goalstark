<?php

status::matching ( 3000, function ( $id )
{
	session::flash ( 'message', 'Successfully added task.' );
	return redirect::to ( "/{$id}/tasks" );
} );
