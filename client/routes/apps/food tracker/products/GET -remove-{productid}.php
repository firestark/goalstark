<?php

route::get ( '/remove/{productid}', function ( )
{
    return app::fulfill ( 'i want to remove a product' );
} );