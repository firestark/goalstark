<?php

interface dietitian
{
    function add ( consumation $consumation );

    function all ( ) : array;

    function findById ( $id ) : consumation;

    function remove ( consumation $consumation );

    function today ( ) : array;

    /**
     * Return todays consumed protein.
     */
    function protein ( ) : int;
}