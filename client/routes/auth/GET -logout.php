<?php

route::get ( '/logout', function ( )
{
    app::make ( 'guard' )->invalidate ( );
    
    session::flash ( 'message', 'Logged out.' );
    return redirect::to ( '/login' );
} );