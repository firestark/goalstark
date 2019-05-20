<?php

route::get ( '/', function ( )
{
    return redirect::to ( '/goals/' );
} );

require __DIR__ . '/apps/routes.php';

requiring ( __DIR__ . '/auth' );

route::group ( '/goals', function ( )
{
    requiring ( __DIR__ . '/goals' );
} );

requiring ( __DIR__ . '/misc' );

route::group ( '/tasks', function ( )
{
    requiring ( __DIR__ . '/tasks' );
} );