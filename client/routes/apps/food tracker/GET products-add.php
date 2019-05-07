<?php

route::get ( '/food-tracker/products/add', function ( )
{
    return view::ok ( 'apps.food-tracker.products.add' );
} );