<?php

app::share ( dietitian::class, function ( $app )
{
    return new flatfileDietitian (
        $app [ 'products file' ],
        $app [ 'products' ]
    );
} );