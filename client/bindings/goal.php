<?php

app::bind ( goal::class, function ( )
{    
    foreach ( input::get ( 'tasks', [ ] ) as $task )
        $tasks [ ] = app::make ( task::class, $task );

    return new goal ( 
        input::get ( 'id', uniqid ( ) ),
        input::get ( 'description', '' ),
        input::get ( 'completeBy', 0 ),
        $tasks ?? [ ]
    );
} );