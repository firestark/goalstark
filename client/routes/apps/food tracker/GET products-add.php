<?php

route::get ( '/products/add', function ( )
{
    return view::ok ( 'apps.food-tracker.products.add' );
} );