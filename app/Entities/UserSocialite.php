<?php namespace App\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class UserSocialite
* @OA\Schema(
*     title="UserSocialite",
*     description="UserSocialite"
* )
*
* @OA\Tag(
*     name="UserSocialite",
*     description="Everything about your UserSocialite" 
* )
*/ 
class UserSocialite extends BaseEntity
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
	 *     description="site",
	 *     title="site",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=255,
	 * )
	 *		 
	 */
	private $site;
	/**
	 * @OA\Property(		 		 		 
	 *     description="account_id",
	 *     title="account_id",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=255,
	 * )
	 *		 
	 */
	private $account_id;
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
 *     request="UserSocialite",
 *     description="UserSocialite object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/UserSocialite"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/UserSocialite")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/UserSocialite")
 *     )
 * )
 */