<?php

use function compact as with;

route::get ( '/{goalid}/tasks/add', function ( $goalid )
{
    $products = app::make ( productManager::class )->all ( );
    $type = input::get ( 'type', '' );
    return view::ok ( 'goals.tasks.add', with ( 'goalid', 'type', 'products' ) );
} );