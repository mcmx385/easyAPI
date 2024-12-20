<?php namespace App\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class RoleUser
* @OA\Schema(
*     title="RoleUser",
*     description="RoleUser"
* )
*
* @OA\Tag(
*     name="RoleUser",
*     description="Everything about your RoleUser" 
* )
*/ 
class RoleUser extends BaseEntity
{
    	/**
	 * @OA\Property(		 		 		 
	 *     description="id",
	 *     title="id",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=20,
	 * )
	 *		 
	 */
	private $id;
	/**
	 * @OA\Property(		 		 		 
	 *     description="user_id",
	 *     title="user_id",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=20,
	 * )
	 *		 
	 */
	private $user_id;
	/**
	 * @OA\Property(		 		 		 
	 *     description="role_id",
	 *     title="role_id",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=20,
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
}
/**
 *
 * @OA\RequestBody(
 *     request="RoleUser",
 *     description="RoleUser object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/RoleUser"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/RoleUser")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/RoleUser")
 *     )
 * )
 */