<?php

status::matching ( 3004, function ( task $task )
{
	$message = 'Task completed.';

	if ( $task instanceof task\count )
		$message = 'Added +1.';


	session::flash ( 'message', $message );
	return redirect::back ( );
} );
