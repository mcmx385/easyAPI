<?php namespace App\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class FailedJobs extends BaseResourceController
{
    protected $modelName = 'App\Models\FailedJobsModel';  

     /**
     * @OA\Get(
     *     path="/failedJobs",
     *     tags={"FailedJobs"},
     *     summary="Find list FailedJobs",
     *     description="Returns list of FailedJobs",
     *     operationId="getFailedJobs",  
     *     @OA\Parameter(
     *         name="search",
     *         in="query",
     *         description="search by column defined",     
     *         @OA\Schema(
     *             type="object"              
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="order",
     *         in="query",
     *         description="order by column defined",     
     *         @OA\Schema(
     *             type="object"              
     *         )
     *     ),    
     *     @OA\Parameter(
     *         name="page",
     *         in="query",
     *         description="page to show",     
     *         @OA\Schema(
     *             type="int32"     
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="limit",
     *         in="query",
     *         description="count data display per page",     
     *         @OA\Schema(
     *             type="int32"     
     *         )
     *     ),   
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",     
     *         @OA\JsonContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/FailedJobs")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/FailedJobs")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/FailedJobs")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="FailedJobs not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/failedJobs/{id}",
     *     tags={"FailedJobs"},
     *     summary="Find FailedJobs by ID",
     *     description="Returns a single FailedJobs",
     *     operationId="getFailedJobsById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of FailedJobs to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/FailedJobs"),
     *         @OA\XmlContent(ref="#/components/schemas/FailedJobs"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="FailedJobs not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/failedJobs",
     *     tags={"FailedJobs"},
     *     summary="Add a new FailedJobs to the store",
     *     operationId="addFailedJobs",
     *     @OA\Response(
     *         response=201,
     *         description="Created FailedJobs",
     *         @OA\JsonContent(ref="#/components/schemas/FailedJobs"),
     *         @OA\XmlContent(ref="#/components/schemas/FailedJobs"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/FailedJobs"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/failedJobs/{id}",
     *     tags={"FailedJobs"},
     *     summary="Update an existing FailedJobs",
     *     operationId="updateFailedJobs",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="FailedJobs id to update",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         ),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplied"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="FailedJobs not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/FailedJobs"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/failedJobs/{id}",
     *     tags={"FailedJobs"},
     *     summary="Deletes a FailedJobs",
     *     operationId="deleteFailedJobs",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="FailedJobs id to delete",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         ),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplied",
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Pet not found",
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     * )
     */
} 