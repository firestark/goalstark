<?php

route::post ( '/apps/food-tracker/products/{name}', function ( )
{
    return app::fulfill ( 'i want to update a product' );
} );