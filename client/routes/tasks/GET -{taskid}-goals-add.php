<?php

use function compact as with;

route::get ( '/{taskid}/goals/add', function ( $taskid )
{
    $goals = app::make ( goalManager::class )->all ( );
    return view::ok ( 'tasks.select-goals', with ( 'taskid', 'goals' ) );
} );