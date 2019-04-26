<?php

route::get ( '/food-tracker/products/{productid}', function ( )
{
    return app::fulfill ( 'i want to see a product' );
} );