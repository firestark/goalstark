<?php

app::bind ( consumation::class, function ( $app )
{
    $product = $app->make ( product::class );
    $product = ( $app [ productManager::class ]->has ( $product ) ) ?
    $app [ productManager::class ]->find ( $product ) : $product;

    return new consumation (
        input::get ( 'consumationid', uniqid ( ) ),
        $product
    );
} );