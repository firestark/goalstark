<?php

use function compact as with;

route::get ( '/{goalid}/tasks/add', function ( $goalid )
{
    // hookup select type view
    $type = 'due';
    return view::ok ( 'goals.tasks.add', with ( 'goalid', 'type' ) );
} );