<?php

app::bind ( task::class, function ( $app )
{
    $class = ( input::get ( 'type', '' ) === 'daily' ) ? dailyTask::class : task::class;
        
    return new $class (
        input::get ( 'goalid', '' ),
        input::get ( 'taskid', uniqid ( ) ),
        input::get ( 'description', '' ),
        strtotime ( input::get ( 'due', date ( 'Y-m-d' ) ) ),
        input::get ( 'completed', false )
    );
} );