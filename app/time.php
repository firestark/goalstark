<?php

function endOfDay ( int $timestamp ) : int
{
    $beginOfDay = strtotime ( 'midnight', $timestamp );
    return strtotime ( 'tomorrow', $beginOfDay ) - 1;
}