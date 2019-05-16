<?php

app::bind ( goal::class, function ( $app )
{   
    if ( input::has ( 'goalid' ) and request::method ( ) !== 'POST' )
        return $app [ goal\manager::class ]->find ( input::get ( 'goalid' ) );

    foreach ( input::get ( 'reasons', [ ] ) as $id => $description )
        $reasons [ ] = new goal\reason ( $id, $description );

    return new goal ( 
        input::get ( 'goalid', uniqid ( ) ),
        input::get ( 'title', '' ),
        input::get ( 'description', '' ),
        $reasons ?? [ ],
        strtotime ( input::get ( 'due', date ( 'Y-m-d' ) ) )
    );
} );