<?php

namespace firestark;

class request extends \http\request
{
    public function uri ( ) : string
    {
        return $this->uri;
    }

    public function method ( ) : string
    {
        return $this->method;
    }

    public function toString ( ) : string
    {
        return ( string ) $this;
    }

    public function header ( string $key, $value = null )
    {
        if ( $value === null )
            return ( $this->headers [ $key ] ?? null );
        
        $this->headers [ $key ] = $value;
    }
}