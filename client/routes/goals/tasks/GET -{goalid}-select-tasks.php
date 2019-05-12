<?php

use function compact as with;

route::get ( '/{goalid}/select-tasks', function ( $goalid )
{
    $tasks = app::make ( task\manager::class )->all ( );
    return view::ok ( 'goals.tasks.select', with ( 'goalid', 'tasks' ) );
} );