<?php

use function compact as with;

status::matching ( 3010, function ( $taskid )
{
	session::flash ( 'message', 'Goals merged.' );
	return redirect::to ( "/tasks/{$taskid}" );
} );
