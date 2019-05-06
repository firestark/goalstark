<?php

use function compact as with;

route::get ( '/{goalid}/select-tasks', function ( $goalid )
{
    view::title ( 'Select tasks' );
    $tasks = app::make ( task\manager::class )->all ( );
    return view::ok ( 'goals.tasks.select', with ( 'goalid', 'tasks' ) );
} );