<?php

namespace scheme;

use scheme;

interface manager
{
    function all ( ) : array;

    function add ( scheme $scheme );

    function find ( $id ) : scheme;

    function remove ( scheme $scheme );

    function update ( scheme $scheme );
}