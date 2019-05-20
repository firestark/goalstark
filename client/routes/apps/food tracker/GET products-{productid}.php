<?php

route::get ( '/products/{productid}', function ( )
{
    return app::fulfill ( 'i want to see a product' );
} );