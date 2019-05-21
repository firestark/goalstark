<?php

route::group ( '/apps', function ( )
{
    require __DIR__ . '/GET -.php';
} );

require __DIR__ . '/fitness/routes.php';
require __DIR__ . '/food tracker/routes.php';