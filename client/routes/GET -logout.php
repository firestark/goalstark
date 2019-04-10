<?php

route::get ( '/logout', function ( )
{
    session::unset ( 'token' );
    session::flash ( 'message', 'Successfully logged out.' );
    return redirect::to ( '/login' );
} );