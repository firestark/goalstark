<?php

route::get ( '/{id}/remove', function ( $id )
{
    return app::fulfill ( 'i want to remove a goal' );
} );