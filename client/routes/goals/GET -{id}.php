<?php

use function compact as with;


route::get ( '/{id}', function ( $id )
{
    view::title ( 'Goal details' );
    return app::fulfill ( 'i want to see a goal' );
} );