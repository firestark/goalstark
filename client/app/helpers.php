<?php

function taskToTypeString ( task $task ) : string
{
	switch ( $task ) {
		case $task instanceof task\scheme\create:
			return 'fitness.scheme.create';
		case $task instanceof task\product\maxKcal:
			return 'product.max-kcal';
		case $task instanceof task\product\count:
			return 'product.count';
		case $task instanceof task\protein:
			return 'protein';
		case $task instanceof task\count:
			return 'count';
		case $task instanceof task\daily:
			return 'daily';
		case $task instanceof task\due:
			return 'due';
		
		default:
			throw new \exception ( 'Unknown type' );
	}
}

function taskStatusClass ( task $task ) : string
{
	if ( $task->isCompleted ( ) )
        return 'completed';
	
		elseif ( $task->isOverdue ( ) )
		return 'overdue';
	
	return '';
}

function goalStatusClass ( goal $goal, array $tasks ) : string
{
	if ( empty ( $tasks ) )
		return 'draft';
		
	if ( $goal->isCompleted ( $tasks ) )
		return 'completed';

	if ( $goal->isOverdue ( $goal->tasks ) )
		return 'overdue';
	
	return '';
}
