<?php

status::matching ( 3005, function ( task $task )
{
	$message = 'Task completed.';

	if ( $task instanceof task\product\count )
		$message = 'Removed 1 consumation.';
	else if ( $task instanceof task\count )
		$message = '+1.';

	session::flash ( 'message', 'Task uncompleted.' );
	return redirect::back ( );
} );
