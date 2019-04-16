<?php

route::get ( '/tasks', function ( )
{
    view::title ( 'Overview' );
    return app::fulfill ( 'i want to see my tasks' );
} );