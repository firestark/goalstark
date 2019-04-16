<?php

route::get ( '/add/task', function ( )
{
    view::title ( 'Select a goal' );
    return app::fulfill ( 'i want to select a goal' );
} );