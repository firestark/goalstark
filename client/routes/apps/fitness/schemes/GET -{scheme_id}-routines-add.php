<?php

use function compact as with;

route::get ( '/{scheme_id}/routines/add', function ( $scheme_id )
{
    return view::ok ( 'apps.fitness.schemes.routines.add', with ( 'scheme_id' ) );
} );