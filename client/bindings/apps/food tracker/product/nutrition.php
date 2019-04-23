<?php

app::bind ( product\nutrition::class, function ( $app )
{
    return new product\nutrition (
        $app->make ( product\fats::class ),
        $app->make ( product\carbohydrates::class ),
        input::get ( 'protein', 0 ),
        input::get ( 'salt', 0 )
    );
} );