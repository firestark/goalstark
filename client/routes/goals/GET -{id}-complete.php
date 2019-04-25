<?php

route::get ( '/{id}/complete', function ( )
{
    return app::fulfill ( 'i want to complete a goal' );
} );