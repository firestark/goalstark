<?php

namespace firestark;

use ioc\container;
use function compact as with;


class app extends container
{
    public function fulfill ( string $request, array $payload = [ ] ) : response
    {
        $token = $this [ 'session' ]->get ( 'token', '' );

        if ( $this [ 'guard' ]->allows ( $this [ 'request' ], $token ) )
            return $this->run ( $request, $payload );

        return $this->deny ( );
    }

    private function run ( string $request, array $payload = [ ] ) : response
    {
        list ( $status, $body ) = $this->make ( $request, $payload );
        $response = $this->call ( $this [ 'statuses' ]->match ( $status ), $body );
        $response->status ( $status );
        return $response;
    }

    private function deny ( )
    {
        $response = $this->call ( $this [ 'statuses' ]->match ( 0 ), [ ] );
        $response [ 'X-Firestark-Status' ] = 0;
        return $response;
    }
}

