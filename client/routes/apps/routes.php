<?php

route::group ( '/apps', function ( )
{
    require __DIR__ . '/GET -.php';
} );

route::group ( '/apps/fitness', function ( )
{
    requiring ( __DIR__ . '/fitness' );
} );

route::group ( '/apps/food-tracker', function ( )
{
    requiring ( __DIR__ . '/food tracker' );
} );