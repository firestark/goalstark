<?php

route::get ( '/apps/food-tracker/add', function ( )
{
    return app::fulfill ( 'i want to select a product' );
} );