<?php

route::post ( '/fitness/exercises', function ( )
{
    return app::fulfill ( 'i want to add an exercise' );
} );