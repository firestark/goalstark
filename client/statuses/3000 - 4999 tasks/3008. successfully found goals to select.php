<?php

use function compact as with;

status::matching ( 3008, function ( array $goals )
{	
	return view::ok ( 'tasks.wizard.select-goals', with ( 'goals' ) );
} );
