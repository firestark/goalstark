<?php

use function compact as with;

route::get ( '/add', function ( )
{
    $products = app::make ( productManager::class )->all ( );
    $goals = input::get ( 'goals', [ ] );
    $type = input::get ( 'type', '' );
    return view::ok ( 'tasks.add', with ( 'type', 'goals', 'products' ) );
} );