<?php

use function compact as with;

route::get ( '/{scheme_id}', function ( $scheme_id )
{
    $scheme = app::make ( scheme\manager::class )->find ( $scheme_id );
    return view::ok ( 'apps.fitness.schemes.edit', with ( 'scheme' ) );
} );