<?php

app::bind ( scheme::class, function ( )
{
    return new scheme ( input::get ( 'name' ) );
} );