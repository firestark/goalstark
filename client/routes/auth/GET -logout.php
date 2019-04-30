<?php

route::get ( '/logout', function ( )
{
    app::make ( 'guard' )->invalidate ( );
    
    session::flash ( 'message', 'Successfully logged out.' );
    return redirect::to ( '/login' );
} );