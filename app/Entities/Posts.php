<?php namespace App\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class Posts
* @OA\Schema(
*     title="Posts",
*     description="Posts"
* )
*
* @OA\Tag(
*     name="Posts",
*     description="Everything about your Posts" 
* )
*/ 
class Posts extends BaseEntity
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
	 *     description="title",
	 *     title="title",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=255,
	 * )
	 *		 
	 */
	private $title;
	/**
	 * @OA\Property(		 		 		 
	 *     description="body",
	 *     title="body",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $body;
	/**
	 * @OA\Property(		 		 		 
	 *     description="cover_image",
	 *     title="cover_image",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=255,
	 * )
	 *		 
	 */
	private $cover_image;
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
 *     request="Posts",
 *     description="Posts object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/Posts"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/Posts")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/Posts")
 *     )
 * )
 */