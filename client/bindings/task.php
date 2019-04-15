<?php

app::bind ( task::class, function ( $app )
{
    if ( input::get ( 'type', '' ) === 'daily' )
        return new dailyTask (
            input::get ( 'taskid', uniqid ( ) ),
            input::get ( 'description', '' )
        );

    return new task (
        input::get ( 'taskid', uniqid ( ) ),
        input::get ( 'description', '' )
    );
} );