<?php

route::post ( '/', function ( )
{
    return app::fulfill ( 'i want to add an exercise' );
} );