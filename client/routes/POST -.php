<?php

route::post ( '/', function ( )
{
    return app::fulfill ( 'i want to add a new goal' );
} );