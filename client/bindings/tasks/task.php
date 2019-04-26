<?php

app::bind ( task::class, function ( $app )
{        
    return new task (
        input::get ( 'goalid', '' ),
        input::get ( 'taskid', uniqid ( ) ),
        input::get ( 'description', '' )
    );
} );