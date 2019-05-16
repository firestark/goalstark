<?php

app::bind ( task\count::class, function ( )
{
    return new task\count (
        input::get ( 'goals', [ ] ),
        input::get ( 'taskid', uniqid ( ) ),
        input::get ( 'description', '' ),
        input::get ( 'count', 0 ),
        strtotime ( input::get ( 'due', date ( 'Y-m-d' ) ) ),
        input::get ( 'completions', [ ] )
    );
} );