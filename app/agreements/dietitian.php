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

    /**
     * @return Int todays consumed kcal's 
     */
    function kcal ( ) : int;

    /**
     * @return Int how many times product has been eaten today.
     */
    function eatenTimes ( product $product ) : int;

    function removeLastWithProduct ( product $product );
}