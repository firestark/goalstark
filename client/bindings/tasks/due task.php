<?php

app::bind ( task\due::class, function ( )
{
    return new task\due (
        input::get ( 'taskid', uniqid ( ) ),
        input::get ( 'description', '' ),
        strtotime ( input::get ( 'due', date ( 'Y-m-d' ) ) )
    );
} );