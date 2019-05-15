<?php

interface dietitian
{
    function add ( consumation $consumation );

    function all ( ) : array;

    function remove ( consumation $consumation );

    function today ( ) : array;

    /**
     * Return todays consumed protein.
     */
    function protein ( ) : int;
}