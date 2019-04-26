<?php

use function compact as with;

route::get ( '/{goalid}/protein/add', function ( $goalid )
{    
    $goal = app::make ( goalManager::class )->find ( $goalid );
    view::title ( 'Add ' . strtolower ( $goal->title ) . ' protein task' );
    return view::ok ( 'tasks.protein.add', with ( 'goalid' ) );
} );