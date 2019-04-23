<?php

route::get ( '/apps/food-tracker/add', function ( )
{
    view::title ( 'Select a product' );
    return view::ok ( 'apps.food-tracker.products' );
} );