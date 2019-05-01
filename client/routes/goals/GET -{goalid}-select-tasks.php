<?php

use function compact as with;

route::get ( '/{goalid}/select-tasks', function ( $goalid )
{
    $tasks = app::make ( task\manager::class )->all ( );
    return view::ok ( 'goals.select-tasks', with ( 'goalid', 'tasks' ) );
} );