<?php

route::post ( '/{productid}', function ( )
{
    return app::fulfill ( 'i want to update a product' );
} );