<?php

route::get ( '/apps/food-tracker', function ( )
{
    return app::fulfill ( 'i want to see my consumations' );
} );