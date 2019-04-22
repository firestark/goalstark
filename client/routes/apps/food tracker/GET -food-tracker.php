<?php

route::get ( '/apps/food-tracker', function ( )
{
    view::title ( 'Food tracker' );
    return view::ok ( 'apps.food-tracker.list' );
} );