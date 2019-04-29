<?php

app::bind ( task::class, function ( $app )
{   
    switch ( input::get ( 'type', '' ) ) {
        case 'due':
            return app::make ( task\due::class );
        case 'protein' :
            return app::make ( task\protein::class );
        default:
            return app::make ( task\due::class );
    }
} );