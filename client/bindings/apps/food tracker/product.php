<?php

app::bind ( product::class, function ( )
{
    return new product (
        input::get ( 'name', '' ),
        input::get ( 'protein', 0 ),
        input::get ( 'sugars', 0 )
    );
} );