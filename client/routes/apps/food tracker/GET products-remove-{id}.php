<?php

route::get ( '/apps/food-tracker/products/remove/{id}', function ( )
{
    return app::fulfill ( 'i want to remove a product' );
} );