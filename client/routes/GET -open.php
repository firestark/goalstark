<?php

route::get ( '/open', function ( )
{
    view::title ( 'Open goals' );
    return app::fulfill ( 'i want to see my open goals' );
} );