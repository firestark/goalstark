<?php

app::bind ( task\product\maxKcal::class, function ( $app )
{
    return new task\product\maxKcal (
        input::get ( 'taskid', uniqid ( ) ),
        input::get ( 'kcal', 0 )
    );
} );