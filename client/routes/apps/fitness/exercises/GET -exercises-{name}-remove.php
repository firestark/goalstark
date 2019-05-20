<?php

route::get ( '/exercises/{name}/remove', function ( )
{
    return app::fulfill ( 'i want to remove an exercise' );
} );