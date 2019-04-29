<?php

app::bind ( task::class, function ( $app )
{   
    if ( input::has ( 'taskid' ) )
        return $app [ task\manager::class ]->findById ( input::get ( 'taskid' ) );

    switch ( input::get ( 'type', '' ) ) {
        case 'due':
            return app::make ( task\due::class );
        case 'protein' :
            return app::make ( task\protein::class );
        default:
            throw new \exception ( 'unknown type' );
    }
} );