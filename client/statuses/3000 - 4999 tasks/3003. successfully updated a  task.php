<?php

status::matching ( 3003, function ( $id )
{
	session::flash ( 'message', 'Updated task.' );
	return redirect::to ( "/{$id}/tasks" );
} );
