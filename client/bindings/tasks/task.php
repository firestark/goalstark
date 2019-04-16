<?php

app::bind ( task::class, function ( $app )
{
    return new task (
        input::get ( 'id', '' ),
        input::get ( 'taskid', uniqid ( ) ),
        input::get ( 'description', '' ),
        strtotime ( input::get ( 'due', date ( 'Y-m-d' ) ) ),
        input::get ( 'completed', false )
    );
} );