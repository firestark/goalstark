<?php

route::get ( '/{scheme}/routines/{routine_id}/remove', 

function ( )
{
    return app::fulfill ( 'i want to remove a routine from a scheme' );
} );