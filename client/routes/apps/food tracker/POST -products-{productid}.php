<?php

route::post ( '/products/{productid}', function ( )
{
    return app::fulfill ( 'i want to update a product' );
} );