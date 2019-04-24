<?php

interface productManager
{
    function add ( product $product );

    function all ( ) : array;

    function has ( product $product ) : bool;

    function find ( product $product ) : product;

    function update ( product $product );

    function remove ( product $product );
}