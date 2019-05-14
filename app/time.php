<?php

function endOfDay ( int $timestamp ) : int
{
    $beginOfDay = strtotime ( 'midnight', $timestamp );
    return strtotime ( 'tomorrow', $beginOfDay ) - 1;
}

function beginOfDay ( int $timestamp ) : int
{
    return strtotime ( 'midnight', $timestamp );
}