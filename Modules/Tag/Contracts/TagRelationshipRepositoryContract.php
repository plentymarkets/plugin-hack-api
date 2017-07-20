<?php
namespace Plenty\Modules\Tag\Contracts;

use Plenty\Modules\Tag\Models\TagRelationship;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * Repository for TagRelationship
 */
interface TagRelationshipRepositoryContract 
{

	public function update(
		array $data, 
		int $tagId, 
		string $availabilityType, 
		int $relationshipValue
	):TagRelationship;

	public function create(
		array $data
	):TagRelationship;

	public function deleteRelation(
		int $relationshipValue, 
		int $tagId
	);

	public function findByValueId(
		int $valueId
	):array;

	public function findByTagId(
		int $tagId
	):array;

	/**
	 * Applies criteria classes to the current repository.
	 */
	public function applyCriteriaFromFilters(
	);

}