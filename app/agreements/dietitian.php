<?php

interface dietitian
{
    function add ( product $product );

    function all ( ) : array;

    function has ( product $product ) : bool;

    function find ( product $product ) : product;

    function update ( product $product );
}