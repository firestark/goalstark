<?php

namespace exercise;

use exercise;

interface manager
{
    function all ( ) : array;

    function add ( exercise $exercise );

    function find ( string $name ) : exercise;

    function remove ( exercise $exercise );

    function has ( string $name ) : bool;
}