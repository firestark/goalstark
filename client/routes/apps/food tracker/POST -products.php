<?php

route::post ( '/food-tracker/products', function ( )
{
    return app::fulfill ( 'i want to add a product' );
} );