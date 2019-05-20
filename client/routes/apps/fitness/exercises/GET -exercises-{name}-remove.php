<?php

route::get ( '/fitness/exercises/{name}/remove', function ( )
{
    return app::fulfill ( 'i want to remove an exercise' );
} );