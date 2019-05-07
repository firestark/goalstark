<?php

app::bind ( goal\reason::class, function ( )
{
    return new goal\reason (
        input::get ( 'reasonid', uniqid ( ) ),
        input::get ( 'description', '' )
    );
} );