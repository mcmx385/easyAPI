<?php namespace App\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class Migrations
* @OA\Schema(
*     title="Migrations",
*     description="Migrations"
* )
*
* @OA\Tag(
*     name="Migrations",
*     description="Everything about your Migrations" 
* )
*/ 
class Migrations extends BaseEntity
{
    	/**
	 * @OA\Property(		 		 		 
	 *     description="id",
	 *     title="id",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=10,
	 * )
	 *		 
	 */
	private $id;
	/**
	 * @OA\Property(		 		 		 
	 *     description="migration",
	 *     title="migration",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=255,
	 * )
	 *		 
	 */
	private $migration;
	/**
	 * @OA\Property(		 		 		 
	 *     description="batch",
	 *     title="batch",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=11,
	 * )
	 *		 
	 */
	private $batch; 
}
/**
 *
 * @OA\RequestBody(
 *     request="Migrations",
 *     description="Migrations object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/Migrations"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/Migrations")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/Migrations")
 *     )
 * )
 */