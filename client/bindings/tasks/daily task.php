<?php

app::bind ( task\daily::class, function ( )
{
    return new task\daily (
        input::get ( 'taskid', uniqid ( ) ),
        input::get ( 'description', '' )
    );
} );