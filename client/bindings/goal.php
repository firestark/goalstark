<?php

app::bind ( goal::class, function ( )
{    
    return new goal ( 
        input::get ( 'id', uniqid ( ) ),
        input::get ( 'description', '' ),
        input::get ( 'completeBy', 0 ),
    );
} );