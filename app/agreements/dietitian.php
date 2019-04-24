<?php

interface dietitian
{
    function add ( consumation $consumation );

    function all ( ) : array;

    function remove ( consumation $consumation );
}