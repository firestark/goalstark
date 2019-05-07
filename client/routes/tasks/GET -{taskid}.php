<?php

route::get ( '/{taskid}', function ( )
{
    try {
        return app::fulfill ( 'i want to see a task' );
    } catch ( exception $e ) {
        return app::call ( status::match ( 4000, [ ] ) );
    }
} );