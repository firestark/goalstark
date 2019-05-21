<?php

app::bind ( scheme\routine::class, function ( $app )
{
    return new scheme\routine (
        input::get ( 'routine_id', uniqid ( ) ),
        $app->make ( 'exercise' ),
        input::get ( 'sets', 0 ),
        input::get ( 'reps', 0 )
    );
} );