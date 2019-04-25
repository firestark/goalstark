<?php

route::get ( '/tasks/add', function ( )
{
    return app::fulfill ( 'i want to select a goal' );
} );