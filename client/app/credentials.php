<?php

namespace firestark;

class credentials
{
    var $username, $password;

    function __construct ( string $username, string $password )
    {
        $this->username = $username;
        $this->password = $password;
    }
}