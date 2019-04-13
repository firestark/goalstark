<?php

route::get ( '/{id}/tasks/{taskid}', function ( $id, $taskid )
{
    $task = app::make ( goalManager::class )->find ( $id )->tasks [ $taskid ];
    return view::ok ( 'tasks/edit', [ 'goal' => $id, 'task' => $task ] );
} );