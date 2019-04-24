<?php

app::share ( productManager::class, function ( $app )
{
    return new flatfileProductManager (
        $app [ 'products file' ],
        $app [ 'products' ]
    );
} );