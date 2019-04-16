<?php

app::share ( 'guard', function ( $app ) : \firestark\guard
{
    return new jwtFileGuard (
        $app [ 'tokens file' ] 
    );
} );