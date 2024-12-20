<?php namespace App\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class PermissionRole
* @OA\Schema(
*     title="PermissionRole",
*     description="PermissionRole"
* )
*
* @OA\Tag(
*     name="PermissionRole",
*     description="Everything about your PermissionRole" 
* )
*/ 
class PermissionRole extends BaseEntity
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
	 *     description="permission_id",
	 *     title="permission_id",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=10,
	 * )
	 *		 
	 */
	private $permission_id;
	/**
	 * @OA\Property(		 		 		 
	 *     description="role_id",
	 *     title="role_id",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=10,
	 * )
	 *		 
	 */
	private $role_id;
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
 *     request="PermissionRole",
 *     description="PermissionRole object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/PermissionRole"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/PermissionRole")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/PermissionRole")
 *     )
 * )
 */