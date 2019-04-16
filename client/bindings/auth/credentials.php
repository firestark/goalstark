<?php

app::bind ( 'credentials', function ( $app ) : \firestark\credentials
{
    return new firestark\credentials (
        input::get ( 'username', '' ),
        input::get ( 'password', '' )
    );
} );
