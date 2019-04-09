<?php

namespace firestark;

class request extends \http\request
{
    public function uri ( )
    {
        return $this->uri;
    }

    public function header ( string $key, $value = null )
    {
        if ( $value === null )
            return ( $this->headers [ $key ] ?? null );
        
        $this->headers [ $key ] = $value;
    }
}