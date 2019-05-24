<?php

app::bind ( task\product\count::class, function ( $app )
{
    return new task\product\count (
        input::get ( 'taskid', uniqid ( ) ),
        app::make ( productManager::class )->find ( app::make ( product::class ) ),
        input::get ( 'count', 0 ),
        strtotime ( input::get ( 'due', date ( 'Y-m-d' ) ) )
    );
} );