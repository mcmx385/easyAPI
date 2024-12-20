<?php namespace App\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class FailedJobs
* @OA\Schema(
*     title="FailedJobs",
*     description="FailedJobs"
* )
*
* @OA\Tag(
*     name="FailedJobs",
*     description="Everything about your FailedJobs" 
* )
*/ 
class FailedJobs extends BaseEntity
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
	 *     description="uuid",
	 *     title="uuid",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=255,
	 * )
	 *		 
	 */
	private $uuid;
	/**
	 * @OA\Property(		 		 		 
	 *     description="connection",
	 *     title="connection",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $connection;
	/**
	 * @OA\Property(		 		 		 
	 *     description="queue",
	 *     title="queue",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $queue;
	/**
	 * @OA\Property(		 		 		 
	 *     description="payload",
	 *     title="payload",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $payload;
	/**
	 * @OA\Property(		 		 		 
	 *     description="exception",
	 *     title="exception",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $exception;
	/**
	 * @OA\Property(		 		 		 
	 *     description="failed_at",
	 *     title="failed_at",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $failed_at; 
}
/**
 *
 * @OA\RequestBody(
 *     request="FailedJobs",
 *     description="FailedJobs object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/FailedJobs"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/FailedJobs")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/FailedJobs")
 *     )
 * )
 */