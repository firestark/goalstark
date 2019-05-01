<?php

namespace firestark;

use ioc\container;
use function compact as with;


class app extends container
{
    private $statuses = [ ];
    private $data = [ ];

    public function fulfill ( string $request, array $payload = [ ] ) : response
    {
        $token = $this [ 'session' ]->get ( 'token', '' );

        if ( $this [ 'guard' ]->allows ( $this [ 'request' ], $token ) )
            if ( $this [ 'session' ]->has ( 'intended' ) )
                return $this [ 'redirector' ]->to ( $this [ 'session' ]->getAndForget ( 'intended' ) );
            else
                return $this->run ( $request, $payload );

        return $this->deny ( );
    }

    function pipe ( array $procedures, array $payload = [ ] ) : response
    {
        $this->data = $payload;

        foreach ( $procedures as $procedure )
            $this->step ( $procedure, $this->data );

        $response = $this->call ( $this [ 'statuses' ]->match ( $this->statuses ), $this->data );
        $this->data = [ ];
        return $response;
    }

    private function step ( string $request, array $payload = [ ] )
    {
        list ( $status, $body ) = $this->make ( $request, $payload );
        $this->statuses [ ] = $status;
        $this->data = array_merge ( $this->data, $body );        
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
        $this [ 'session' ]->set ( 'intended', $this [ 'request' ]->uri ( ) );
        $response = $this->call ( $this [ 'statuses' ]->match ( 0 ), [ ] );
        $response [ 'X-Firestark-Status' ] = 0;
        return $response;
    }
}