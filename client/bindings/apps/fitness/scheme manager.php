<?php

app::share ( scheme\manager::class, function ( $app )
{
    return new flatfileSchemeManager ( 
        $app [ 'schemes file' ],
        $app [ 'schemes' ]
    );
} );