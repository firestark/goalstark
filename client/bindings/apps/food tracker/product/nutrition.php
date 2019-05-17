<?php

app::bind ( product\nutrition::class, function ( $app )
{
    return new product\nutrition (
        input::get ( 'per', '' ),
        input::get ( 'kcal', 0 ),
        $app->make ( product\fats::class ),
        $app->make ( product\carbohydrates::class ),
        input::get ( 'protein', 0 ),
        input::get ( 'salt', 0 )
    );
} );