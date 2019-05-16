<?php

app::bind ( task\product\count::class, function ( $app )
{
    foreach ( input::get ( 'consumations', [ ] ) as $consumationid )
        $completions [ ] = $app [ dietitian::class ]->findById ( $consumationid );

    return new task\product\count (
        input::get ( 'goals', [ ] ),
        input::get ( 'taskid', uniqid ( ) ),
        app::make ( productManager::class )->find ( app::make ( product::class ) ),
        input::get ( 'count', 0 ),
        strtotime ( input::get ( 'due', date ( 'Y-m-d' ) ) ),
        $completions ?? [ ]
    );
} );