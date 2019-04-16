<?php

route::get ( '/uncomplete/{id}', function ( )
{
    return app::fulfill ( 'i want to uncomplete a goal' );
} );