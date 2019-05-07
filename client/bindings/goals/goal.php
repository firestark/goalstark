<?php

app::bind ( goal::class, function ( $app )
{    
    return new goal ( 
        input::get ( 'goalid', uniqid ( ) ),
        input::get ( 'title', '' ),
        input::get ( 'description', '' ),
        input::get ( 'reasons', '' ),
        strtotime ( input::get ( 'due', date ( 'Y-m-d' ) ) ),
        input::get ( 'completed', false )
    );
} );