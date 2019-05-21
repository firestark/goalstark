<?php

route::post ( '/{scheme_id}/routines', function ( )
{
    return app::fulfill ( 'i want to add a routine to a scheme' );
} );