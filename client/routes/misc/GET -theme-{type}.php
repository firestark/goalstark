<?php

route::get ( '/theme/{type}', function ( string $type )
{
    session::reflash ( );
    session::set ( 'theme', $type );
    return redirect::back ( );
} );