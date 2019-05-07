<?php

use function compact as with;

route::get ( '/add', function ( )
{
    $goals = input::get ( 'goals', [ ] );
    $type = input::get ( 'type', '' );
    return view::ok ( 'tasks.add', with ( 'type', 'goals' ) );
} );