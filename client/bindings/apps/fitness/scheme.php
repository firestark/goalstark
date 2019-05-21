<?php

app::bind ( scheme::class, function ( $app )
{
    if ( $app [ scheme\manager::class ]->has ( input::get ( 'scheme', '' ) ) )
        return $app [ scheme\manager::class ]->find ( input::get ( 'scheme', '' ) );

    if ( input::has ( 'old-scheme_id' ) )
        $routines = $app [ scheme\manager::class ]->find ( input::get ( 'old-scheme_id' ) )->routines;

    return new scheme (
        input::get ( 'scheme_id', uniqid ( ) ),
        input::get ( 'name', '' ),
        $routines ?? [ ]
    );
} );