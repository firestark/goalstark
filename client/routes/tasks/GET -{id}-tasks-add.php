<?php

route::get ( '/{id}/tasks/add', function ( $id )
{
    $goal = app::make ( goalManager::class )->find ( $id );
    view::title ( 'Add ' . strtolower ( $goal->title ) . ' task' );
    return view::ok ( 'tasks.add', [ 'goal' => $id ] );
} );