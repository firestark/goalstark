<?php

app::bind ( task\product\count::class, function ( )
{
    return new task\product\count (
        input::get ( 'goals', [ ] ),
        input::get ( 'taskid', uniqid ( ) ),
        input::get ( 'description', '' ),
        input::get ( 'productid', '' ),
        input::get ( 'count', 0 ),
        strtotime ( input::get ( 'due', date ( 'Y-m-d' ) ) )
    );
} );