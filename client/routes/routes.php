<?php

route::get ( '/', function ( )
{
    return redirect::to ( '/goals/' );
} );

route::group ( '/apps', function ( )
{
    requiring ( __DIR__ . '/apps' );
} );

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