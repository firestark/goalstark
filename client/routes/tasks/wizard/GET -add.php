<?php

use function compact as with;

route::get ( '/add', function ( )
{
    $products = app::make ( productManager::class )->all ( );
    $goals = input::get ( 'goals', [ ] );
    $type = input::get ( 'type', '' );
    $view = 'tasks.types.' . $type . '.add';

    return view::ok ( $view, with ( 'type', 'goals', 'products' ) );
} );