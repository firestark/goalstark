<?php

app::bind ( task\protein::class, function ( )
{
    return new task\protein (
        input::get ( 'taskid', uniqid ( ) ),
        input::get ( 'protein', 0 )
    );
} );