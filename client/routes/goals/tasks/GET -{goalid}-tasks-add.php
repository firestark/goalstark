<?php

use function compact as with;

route::get ( '/{goalid}/tasks/add', function ( $goalid )
{
    $type = input::get ( 'type', '' );
    return view::ok ( 'goals.tasks.add', with ( 'goalid', 'type' ) );
} );