<?php

route::get ( '/apps/food-tracker/products/remove/{name}', function ( )
{
    return app::fulfill ( 'i want to remove a product' );
} );