<?php

use Firebase\JWT\JWT;
use firestark\credentials;
use firestark\guard;

class jwtFileGuard extends guard
{
    const key = 'eye-fire';

    function stamp ( credentials $credentials ) : string
    {
        return JWT::encode (
            [ 'username' => $credentials->username
            , 'password' => hash ( 'sha256', $credentials->password )
            ]
        , self::key
        );
    }

    function authenticate ( string $token ) : bool
    {
        try {
            JWT::decode ( $token, self::key, array ( 'HS256' ) );
            return true;
        } catch ( exception $e ) {
            return false;
        }
    }
}