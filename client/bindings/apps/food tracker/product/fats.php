<?php

app::bind ( product\fats::class, function ( $app )
{
    return new product\fats (
        input::get ( 'saturated-fats', 0 ),
        input::get ( 'unsaturated-fats', 0 )
    );
} );