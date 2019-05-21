<?php

route::group ( '/apps', function ( )
{
    require __DIR__ . '/GET -.php';
} );

require __DIR__ . '/fitness/routes.php';

route::group ( '/apps/food-tracker', function ( )
{
    requiring ( __DIR__ . '/food tracker' );
} );