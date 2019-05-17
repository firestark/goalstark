<?php

namespace firestark;

use http\request;


class kernel
{
    private $app = null;

    function __construct ( app $app )
    {
        $this->app = $app;
    }

    function handle ( request $request ) : \http\response
    {
        if ( ! $this->allows ( $request ) )
            return $this->deny ( );

        list ( $task, $arguments ) = $this->app [ 'dispatcher' ]->match ( $request->method, $request->uri );
        
        // setting the arguments matched from the router onto the http request object
        // so they can be used throughout the app from the input facade
        foreach ( $arguments as $key => $value )
            \input::set ( $key, $value );
        
        return call_user_func_array ( $task, $arguments );
    }

    private function allows ( request $request ) : bool
    {
        $token = $this->app [ 'guard' ]->getToken ( );
        return ( $this->app [ 'guard' ]->allows ( $request, $token ) );
    }

    private function deny ( ) : \http\response
    {
        $this->app [ 'session' ]->set ( 'intended', $this->app [ 'request' ]->uri ( ) );
        $response = $this->app->call ( $this->app [ 'statuses' ]->match ( 0 ), [ ] );
        $response [ 'X-Firestark-Status' ] = 0;
        return $response;
    }
}
