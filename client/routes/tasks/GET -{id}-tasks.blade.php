<?php

route::get ( '/{id}/tasks', function ( )
{
    view::title ( 'Goal details' );
    return app::fulfill ( 'i want to see a goal\'s tasks' );
} );