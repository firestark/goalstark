<?php

route::get ( '/theme/{type}', function ( string $type )
{
    session::set ( 'theme', $type );
    return redirect::back ( );
} );