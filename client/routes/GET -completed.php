<?php

route::get ( '/completed', function ( )
{
    view::title ( 'Completed goals' );
    return app::fulfill ( 'i want to see my completed goals' );
} );