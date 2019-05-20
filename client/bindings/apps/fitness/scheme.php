<?php

app::bind ( scheme::class, function ( )
{
    return new scheme (
        input::get ( 'scheme_id', uniqid ( ) ),
        input::get ( 'name', '' ) 
    );
} );