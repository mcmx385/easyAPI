<?php namespace App\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class PasswordResets
* @OA\Schema(
*     title="PasswordResets",
*     description="PasswordResets"
* )
*
* @OA\Tag(
*     name="PasswordResets",
*     description="Everything about your PasswordResets" 
* )
*/ 
class PasswordResets extends BaseEntity
{
    	/**
	 * @OA\Property(		 		 		 
	 *     description="email",
	 *     title="email",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=255,
	 * )
	 *		 
	 */
	private $email;
	/**
	 * @OA\Property(		 		 		 
	 *     description="token",
	 *     title="token",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=255,
	 * )
	 *		 
	 */
	private $token;
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
}
/**
 *
 * @OA\RequestBody(
 *     request="PasswordResets",
 *     description="PasswordResets object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/PasswordResets"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/PasswordResets")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/PasswordResets")
 *     )
 * )
 */