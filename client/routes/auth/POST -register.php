<?php

use firestark\credentials;
use firestark\userManager;

route::post ( '/register', function ( )
{
    $credentials = app::make ( 'credentials' );
    $userManager = app::make ( userManager::class );

    if ( $userManager->registered ( $credentials->username ) )
    {
        session::flash ( 'message', 'Username already exists.' );
        return redirect::back ( );
    }

    $userManager->register ( $credentials );
    app::make ( 'guard' )->stamp ( $credentials );
    session::flash ( 'message', 'Logged in.' );
    return redirect::to ( '/' );
} );