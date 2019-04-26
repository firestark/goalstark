<?php

route::post ( '/{goalid}/protein', function ( )
{
    dd ( input::all ( ) );
} );