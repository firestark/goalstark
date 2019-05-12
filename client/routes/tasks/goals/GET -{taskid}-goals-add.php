<?php

use function compact as with;

route::get ( '/{taskid}/goals/add', function ( $taskid )
{
    $task = app::make ( task\manager::class )->findById ( $taskid );
    $goals = app::make ( goal\manager::class )->all ( );
    return view::ok ( 'tasks.select-goals', with ( 'task', 'goals' ) );
} );