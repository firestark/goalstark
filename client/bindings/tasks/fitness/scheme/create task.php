<?php

app::bind ( task\scheme\create::class, function ( )
{
    return new task\scheme\create (
        input::get ( 'goals', [ ] ),
        input::get ( 'taskid', uniqid ( ) ),
        strtotime ( input::get ( 'due', date ( 'Y-m-d' ) ) )
    );
} );