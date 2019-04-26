<?php

route::get ( '/{goalid}/{type}/add', function ( $goalid, string $type )
{
    dd ( $type );
    
    $goal = app::make ( goalManager::class )->find ( $goalid );
    view::title ( 'Add ' . strtolower ( $goal->title ) . ' task' );
    return view::ok ( 'tasks.add', [ 'goal' => $goalid, 'type' => $type ] );
} );