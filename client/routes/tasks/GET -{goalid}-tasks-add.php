<?php

route::get ( '/{goalid}/tasks/add', function ( $goalid )
{
    $goal = app::make ( goalManager::class )->find ( $goalid );
    view::title ( 'Add ' . strtolower ( $goal->title ) . ' task' );
    return view::ok ( 'tasks.add', [ 'goal' => $goalid ] );
} );