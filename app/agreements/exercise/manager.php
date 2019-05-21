<?php

namespace exercise;

use exercise;

interface manager
{
    function all ( ) : array;

    function add ( exercise $exercise );

    function find ( $id ) : exercise;

    function remove ( exercise $exercise );

    function has ( $id ) : bool;
}