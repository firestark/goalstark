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
		case $task instanceof task\due\simple:
			return 'due';
		
		default:
			throw new \exception ( 'Unknown type' );
	}
}

function taskStatusClass ( task $task ) : string
{
	if ( $task instanceof task\product\maxKcal )
		return ( app::make ( dietitian::class )->kcal ( ) <= $task->kcal ) ? 'completed' : 'overdue';

	if ( app::make ( task\manager::class )->isCompleted ( $task ) ) 
		return 'completed';
	
	elseif ( app::make ( task\manager::class )->isOverdue ( $task ) )
		return 'overdue';
	
	return '';
}

function goalStatusClass ( goal $goal, array $tasks ) : string
{		
	if ( $goal->isCompleted ( $tasks ) )
		return 'completed';

	if ( $goal->isOverdue ( $goal->tasks ) )
		return 'overdue';
	
	if ( $goal->isDraft ( $tasks ) )
		return 'draft';
	
	return '';
}
