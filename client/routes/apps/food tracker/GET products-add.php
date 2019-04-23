<?php

route::get ( '/apps/food-tracker/products/add', function ( )
{
    view::title ( 'Add a product' );
    return view::ok ( 'apps.food-tracker.products.add' );
} );