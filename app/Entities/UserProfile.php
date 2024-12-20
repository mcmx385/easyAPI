<?php namespace App\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class UserProfile
* @OA\Schema(
*     title="UserProfile",
*     description="UserProfile"
* )
*
* @OA\Tag(
*     name="UserProfile",
*     description="Everything about your UserProfile" 
* )
*/ 
class UserProfile extends BaseEntity
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
	 *     description="full_name",
	 *     title="full_name",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=255,
	 * )
	 *		 
	 */
	private $full_name;
	/**
	 * @OA\Property(		 		 		 
	 *     description="gender",
	 *     title="gender",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=255,
	 * )
	 *		 
	 */
	private $gender;
	/**
	 * @OA\Property(		 		 		 
	 *     description="birthday",
	 *     title="birthday",
	 *     type="string",
	 * 	   format="date",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $birthday;
	/**
	 * @OA\Property(		 		 		 
	 *     description="avatar",
	 *     title="avatar",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=255,
	 * )
	 *		 
	 */
	private $avatar;
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
 *     request="UserProfile",
 *     description="UserProfile object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/UserProfile"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/UserProfile")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/UserProfile")
 *     )
 * )
 */