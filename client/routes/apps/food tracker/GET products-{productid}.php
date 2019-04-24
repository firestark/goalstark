<?php

route::get ( '/apps/food-tracker/products/{productid}', function ( )
{
    return app::fulfill ( 'i want to see a product' );
} );