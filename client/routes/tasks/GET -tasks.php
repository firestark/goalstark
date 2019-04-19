<?php

route::get ( '/tasks', function ( )
{
    return app::fulfill ( 'i want to see my tasks' );
} );