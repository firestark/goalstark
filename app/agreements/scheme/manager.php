<?php

namespace scheme;

use scheme;

interface manager
{
    function all ( ) : array;

    function add ( scheme $scheme );

    function find ( string $name ) : scheme;

    function remove ( scheme $scheme );
}