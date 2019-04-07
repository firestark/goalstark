<?php

route::post ( '/{id}', function ( )
{
    input::set ( 'completeBy', strtotime ( input::get ( 'completeBy', date('Y-m-d') ) ) );
    return app::fulfill ( 'i want to update a goal' );
} );