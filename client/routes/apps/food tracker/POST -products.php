<?php

route::post ( '/products', function ( )
{
    return app::fulfill ( 'i want to add a product' );
} );