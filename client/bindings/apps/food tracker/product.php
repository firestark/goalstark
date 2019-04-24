<?php

app::bind ( product::class, function ( $app )
{
    return new product (
        input::get ( 'id', uniqid ( ) ),
        input::get ( 'name', '' ),
        $app->make ( product\nutrition::class )
    );
} );