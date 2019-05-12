<?php

use function compact as with;

route::post ( '/{goalid}/tasks', function ( )
{
    $tasks = [ ];

    foreach ( input::get ( 'tasks', [ ] ) as $task )
        $tasks [ ] = app::make ( 'task', [ 'taskid' => $task ] );
    
    return app::fulfill ( 'i want to add tasks to a goal', with ( 'tasks' ) );
} );