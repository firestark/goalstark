<?php

app::bind ( product\carbohydrates::class, function ( $app )
{
    return new product\carbohydrates (
        input::get ( 'sugars', 0 )
    );
} );