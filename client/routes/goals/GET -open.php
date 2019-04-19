<?php

route::get ( '/open', function ( )
{
    return app::fulfill ( 'i want to see my open goals' );
} );