<?php

status::matching ( 1001, function ( $id )
{
	session::flash ( 'message', 'Successfully added goal.' );
	return redirect::to ( "/goals/{$id}" );
} );
