<?php

app::bind ( product\fats::class, function ( $app )
{
    return new product\fats (
        input::get ( 'total-fats', 0 ),
        input::get ( 'saturated-fats', 0 )
    );
} );