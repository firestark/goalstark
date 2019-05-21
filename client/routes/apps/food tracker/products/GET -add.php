<?php

route::get ( '/add', function ( )
{
    return view::ok ( 'apps.food-tracker.products.add' );
} );