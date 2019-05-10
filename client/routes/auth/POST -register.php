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
    createfiles ( $credentials );

    app::make ( 'guard' )->stamp ( $credentials );
    session::flash ( 'message', 'Logged in.' );
    return redirect::to ( '/' );
} );


function createFiles ( credentials $credentials )
{
    $path = __DIR__ . '/../../storage/databases/files/' . md5 ( $credentials->username );

    $files = [
        $path . '/consumations.data',
        $path . '/goals.data',
        $path. '/tasks.data'
    ];
    
    if ( ! file_exists ( $path ) )
        mkdir ( $path, 0777, true );
    
    foreach ( $files as $file )
        if ( ! file_exists ( $file ) )
            fopen ( $file, 'w' );
}