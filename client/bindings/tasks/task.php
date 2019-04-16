<?php

app::bind ( task::class, function ( $app )
{
    return new task (
        input::get ( 'id', '' ),
        input::get ( 'taskid', uniqid ( ) ),
        input::get ( 'description', '' ),
        input::get ( 'completed', false )
    );
} );