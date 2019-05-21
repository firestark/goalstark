<?php

route::group ( '/apps/fitness', function ( )
{
    requiring ( __DIR__ . '/schemes' );
} );

route::group ( '/apps/fitness/exercises', function ( )
{
    requiring ( __DIR__ . '/exercises' );
} );