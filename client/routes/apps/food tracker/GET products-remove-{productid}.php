<?php

route::get ( '/products/remove/{productid}', function ( )
{
    return app::fulfill ( 'i want to remove a product' );
} );