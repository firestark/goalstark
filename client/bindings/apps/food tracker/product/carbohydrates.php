<?php

app::bind ( product\carbohydrates::class, function ( $app )
{
    return new product\carbohydrates (
        input::get ( 'carbohydrates-total', 0 ),
        input::get ( 'sugars', 0 ),
        input::get ( 'fiber', 0 )
    );
} );