<?php

app::bind ( exercise::class, function ( $app )
{
    if ( $app [ exercise\manager::class ]->has ( input::get ( 'exercise', '' ) ) )
        return $app [ exercise\manager::class ]->find ( input::get ( 'exercise', '' ) );
        
    return new exercise ( input::get ( 'name', '' ) );
} );