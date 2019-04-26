<?php

route::post ( '/food-tracker/products/{productid}', function ( )
{
    return app::fulfill ( 'i want to update a product' );
} );