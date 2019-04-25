<?php

route::get ( '/{id}/uncomplete', function ( )
{
    return app::fulfill ( 'i want to uncomplete a goal' );
} );