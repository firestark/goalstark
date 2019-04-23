<?php

route::get ( '/apps/food-tracker/products', function ( )
{
    return view::ok ( 'apps.food-tracker.products' );
} );