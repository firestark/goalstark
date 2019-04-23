<?php

route::get ( '/apps/food-tracker/products/{name}', function ( )
{
    return app::fulfill ( 'i want to see a product' );
} );