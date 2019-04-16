<?php

interface taskManager
{
    function add ( task $task );

    function tasksFor ( goal $goal ) : array;

    function has ( task $task ) : bool;

    function all ( ) : array;

    function find ( task $task ) : task;

    function update ( task $task );

    function complete ( task $task );

    function uncomplete ( task $task );

    function remove ( task $task );
}