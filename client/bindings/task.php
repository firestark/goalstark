<?php

app::bind ( task::class, function ( $app, array $input )
{
    return new task (
        $input [ 'id' ] ?? uniqid ( ),
        $input [ 'description' ] ?? ''
    );
} );