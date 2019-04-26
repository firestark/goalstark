<?php

route::get ( '/food-tracker', function ( )
{
    return app::fulfill ( 'i want to see my consumations' );
} );