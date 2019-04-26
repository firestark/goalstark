<?php

route::group ( '/apps', function ( )
{
    requiring ( __DIR__ . '/apps' );
} );

requiring ( __DIR__ . '/auth' );
requiring ( __DIR__ . '/goals' );
requiring ( __DIR__ . '/misc' );

route::group ( '/tasks', function ( )
{
    requiring ( __DIR__ . '/tasks' );
} );