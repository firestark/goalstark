<?php

use Firebase\JWT\JWT;
use firestark\credentials;
use firestark\guard;
use firestark\session;

class jwtSessionGuard extends guard
{
    const key = 'eye-fire';
    private $session = null;

    function __construct ( session $session )
    {
        $this->session = $session;
    }

    function stamp ( credentials $credentials ) : string
    {
        $token = JWT::encode (
            [ 'username' => $credentials->username
            , 'password' => hash ( 'sha256', $credentials->password )
            ]
        , self::key
        );

        $this->session->set ( 'token', $token );
        return $token;
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

    function invalidate ( )
    {
        $this->session->unset ( 'token' );
    }
}