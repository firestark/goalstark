<?php

route::group ( '/apps/food-tracker', function ( )
{
    requiring ( __DIR__ . '/consumations' );
} );

route::group ( '/apps/food-tracker/products', function ( )
{
    requiring ( __DIR__ . '/products' );
} );
