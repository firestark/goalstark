<?php

use function compact as with;

route::get ( '/{goalid}/tasks/select-type', function ( $goalid )
{
    return view::ok ( 'goals.tasks.select-type', with ( 'goalid' ) );
} );