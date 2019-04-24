<?php

app::share ( dietitian::class, function ( $app )
{
    return new flatfileDietitian (
        $app [ 'consumations file' ],
        $app [ 'consumations' ]
    );
} );