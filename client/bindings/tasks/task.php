<?php

app::bind ( task::class, function ( $app )
{   
    if ( isset ( $app [ goal::class ]->tasks [ input::get ( 'task', '' ) ] ) )
        return $app [ goal::class ]->tasks [ input::get ( 'task', '' ) ];

    switch ( input::get ( 'type', '' ) ) {
        case 'daily' :
            return app::make ( task\daily::class );
        case 'due':
            return app::make ( task\due::class );
        case 'fitness.scheme.create' :
            return app::make ( task\scheme\create::class );
        case 'protein' :
            return app::make ( task\protein::class );
        case 'product.max-kcal' :
            return app::make ( task\product\maxKcal::class );
        case 'count':
            return app::make ( task\count::class );
        case 'product.count':
            return app::make ( task\product\count::class );
        default:
            throw new \exception ( 'unknown type' );
    }
} );