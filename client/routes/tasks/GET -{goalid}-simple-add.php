<?php

use function compact as with;

route::get ( '/{goalid}/simple/add', function ( $goalid )
{    
    $goal = app::make ( goalManager::class )->find ( $goalid );
    view::title ( 'Add ' . strtolower ( $goal->title ) . ' task' );
    return view::ok ( 'tasks.add', with ( 'goalid' ) );
} );