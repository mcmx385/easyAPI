<?php namespace App\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class Permissions
* @OA\Schema(
*     title="Permissions",
*     description="Permissions"
* )
*
* @OA\Tag(
*     name="Permissions",
*     description="Everything about your Permissions" 
* )
*/ 
class Permissions extends BaseEntity
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
	 *     description="name",
	 *     title="name",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=191,
	 * )
	 *		 
	 */
	private $name;
	/**
	 * @OA\Property(		 		 		 
	 *     description="slug",
	 *     title="slug",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=191,
	 * )
	 *		 
	 */
	private $slug;
	/**
	 * @OA\Property(		 		 		 
	 *     description="description",
	 *     title="description",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=191,
	 * )
	 *		 
	 */
	private $description;
	/**
	 * @OA\Property(		 		 		 
	 *     description="model",
	 *     title="model",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=191,
	 * )
	 *		 
	 */
	private $model;
	/**
	 * @OA\Property(		 		 		 
	 *     description="created_at",
	 *     title="created_at",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * )
	 *		 
	 */
	private $created_at;
	/**
	 * @OA\Property(		 		 		 
	 *     description="updated_at",
	 *     title="updated_at",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * )
	 *		 
	 */
	private $updated_at;
	/**
	 * @OA\Property(		 		 		 
	 *     description="deleted_at",
	 *     title="deleted_at",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * )
	 *		 
	 */
	private $deleted_at; 
}
/**
 *
 * @OA\RequestBody(
 *     request="Permissions",
 *     description="Permissions object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/Permissions"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/Permissions")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/Permissions")
 *     )
 * )
 */