<?php

route::get ( '/apps/food-tracker/products/remove/{productid}', function ( )
{
    return app::fulfill ( 'i want to remove a product' );
} );