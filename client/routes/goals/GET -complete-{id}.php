<?php

route::get ( '/complete/{id}', function ( )
{
    return app::fulfill ( 'i want to complete a goal' );
} );