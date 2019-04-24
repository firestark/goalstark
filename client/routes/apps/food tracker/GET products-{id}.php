<?php

route::get ( '/apps/food-tracker/products/{id}', function ( )
{
    return app::fulfill ( 'i want to see a product' );
} );