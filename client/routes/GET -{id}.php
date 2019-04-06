<?php

use function compact as with;


route::get ( '/{id}', function ( $id )
{
    $goal = app::make ( goalManager::class )->find ( $id );
    return view::ok ( 'edit', with ( 'goal' ) );
} );