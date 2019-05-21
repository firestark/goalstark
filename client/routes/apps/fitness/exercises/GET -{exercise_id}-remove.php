<?php

route::get ( '/{exercise_id}/remove', function ( )
{
    return app::fulfill ( 'i want to remove an exercise' );
} );