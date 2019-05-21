<?php

route::get ( '/{productid}', function ( )
{
    return app::fulfill ( 'i want to see a product' );
} );