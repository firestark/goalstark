<?php

route::get ( '/remove/{id}', function ( $id )
{
    return app::fulfill ( 'i want to remove a goal' );
} );