<?php

route::get ( '/food-tracker/products', function ( )
{
    return app::fulfill ( 'i want to see my products' );
} );