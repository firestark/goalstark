<?php

use firestark\userManager;

route::post ( '/login', function ( )
{
    $credentials = app::make ( 'credentials' );
    
    if ( ! app::make ( userManager::class )->has ( $credentials ) )
    {
        session::flash ( 'message', 'Invalid credentials' );
        return redirect::back ( );
    }

    app::make ( 'guard' )->stamp ( $credentials );
    session::flash ( 'message', 'Logged in.' );
    return redirect::to ( session::get ( 'intended', '/' ) );
} );