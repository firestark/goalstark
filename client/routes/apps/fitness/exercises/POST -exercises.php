<?php

route::post ( '/exercises', function ( )
{
    return app::fulfill ( 'i want to add an exercise' );
} );