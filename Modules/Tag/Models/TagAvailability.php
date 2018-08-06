<?php
namespace Plenty\Modules\Tag\Models;


/**
 * The tag availability model.
 */
abstract class TagAvailability 
{

	const TAG_TYPE_CATEGORY = 'category';

	const TAG_TYPE_TICKET = 'ticket';

	const TAG_TYPE_ITEM = 'item';

	const TAG_TYPE_BOARD = 'board';

	const TAG_TYPE_CONTACT = 'contact';

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$tagId;
	public		$tagType;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}