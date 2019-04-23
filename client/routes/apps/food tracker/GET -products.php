<?php

route::get ( '/apps/food-tracker/products', function ( )
{
    return app::fulfill ( 'i want to see my products' );
} );