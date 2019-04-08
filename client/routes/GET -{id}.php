<?php

use function compact as with;


route::get ( '/{id}', function ( $id )
{
    view::title ( 'Goal ' . $id );
    return app::fulfill ( 'i want to see a goal' );
} );