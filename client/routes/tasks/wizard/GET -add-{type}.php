<?php

use function compact as with;

route::get ( '/add/{type}', function ( string $type )
{
    // now return correct view based on type...
    // the description field is there always,, should we just use
    // if statements to add other needs?

    $goals = input::get ( 'goals', [ ] );
    view::title ( 'Add task' );
    return view::ok ( 'tasks.add', with ( 'type', 'goals' ) );
} );