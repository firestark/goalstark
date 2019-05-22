<?php

use function compact as with;

status::matching ( 1005, function ( goal $goal )
{
	return view::ok ( 'goals.edit', with ( 'goal' ) );
} );
