<?php

route::post ( '/apps/food-tracker/products/{id}', function ( )
{
    return app::fulfill ( 'i want to update a product' );
} );