<?php
namespace Plenty\Modules\Ticket\Models;


/**
 * The ticket status group model.
 */
abstract class TicketStatusGroup 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$position;
	
public		$color;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}