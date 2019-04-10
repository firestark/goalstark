<?php

route::post ( '/login', function ( )
{
    $credentials = app::make ( 'credentials' );
    if ( $credentials->username !== 'admin' or $credentials->password !== 'admin' )
    {
        session::flash ( 'message', 'Invalid credentials' );
        return redirect::back ( );
    }

    session::set ( 'token', app::make ( 'guard' )->stamp ( app::make ( 'credentials' ) ) );
    session::flash ( 'message', 'Successfully logged in.' );
    return redirect::to ( '/' );
} );