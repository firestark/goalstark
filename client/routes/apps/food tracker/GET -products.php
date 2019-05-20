<?php

route::get ( '/products', function ( )
{
    return app::fulfill ( 'i want to see my products' );
} );