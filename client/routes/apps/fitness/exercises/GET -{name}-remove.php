<?php

route::get ( '/{name}/remove', function ( )
{
    return app::fulfill ( 'i want to remove an exercise' );
} );