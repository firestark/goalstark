<?php

app::bind ( task::class, function ( $app, array $payload = [ ] )
{   
    if ( input::has ( 'taskid' ) and request::toString ( ) !== 'POST /tasks/' . input::get ( 'taskid' ) )
        return $app [ task\manager::class ]->findById ( input::get ( 'taskid' ) );
    
    if ( isset ( $payload [ 'taskid' ] ) )
        return $app [ task\manager::class ]->findById ( $payload [ 'taskid' ] );

    switch ( input::get ( 'type', '' ) ) {
        case 'daily' :
            return app::make ( task\daily::class );
        case 'due':
            return app::make ( task\due::class );
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