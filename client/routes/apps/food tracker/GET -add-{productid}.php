<?php

route::get ( '/food-tracker/add/{productid}', function ( )
{
    return app::fulfill ( 'i want to add a consumation' );
} );