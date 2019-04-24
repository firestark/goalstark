<?php

app::bind ( consumation::class, function ( $app )
{
    return new consumation (
        input::get ( 'consumationid', uniqid ( ) ),
        $app [ productManager::class ]->find ( $app->make ( product::class ) )
    );
} );