<?php

route::post ( '/{goalid}/protein', function ( )
{
    return app::fulfill ( 'i want to add a protein task' );
} );