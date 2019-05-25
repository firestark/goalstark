<?php

app::share ( task\manager::class, function ( $app )
{
    return new task\manager (
        $app [ dietitian::class ]
    );
} );
