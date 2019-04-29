<?php

use function compact as with;

route::get ( '/add', function ( )
{
    $goals = input::get ( 'goals', [ ] );
    $type = input::get ( 'type', '' );
    view::title ( 'Add task' );
    return view::ok ( 'tasks.add', with ( 'type', 'goals' ) );
} );