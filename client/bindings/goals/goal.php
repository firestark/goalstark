<?php

app::bind ( goal::class, function ( )
{    
    return new goal ( 
        input::get ( 'id', uniqid ( ) ),
        input::get ( 'title', '' ),
        input::get ( 'description', '' ),
        strtotime ( input::get ( 'due', date ( 'Y-m-d' ) ) ),
        input::get ( 'rating', 1 ),
        input::get ( 'completed', false )
    );
} );