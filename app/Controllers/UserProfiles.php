<?php namespace App\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class UserProfiles extends BaseResourceController
{
    protected $modelName = 'App\Models\UserProfileModel';  

     /**
     * @OA\Get(
     *     path="/userProfiles",
     *     tags={"UserProfile"},
     *     summary="Find list UserProfile",
     *     description="Returns list of UserProfile",
     *     operationId="getUserProfile",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/UserProfile")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/UserProfile")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/UserProfile")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="UserProfile not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/userProfiles/{id}",
     *     tags={"UserProfile"},
     *     summary="Find UserProfile by ID",
     *     description="Returns a single UserProfile",
     *     operationId="getUserProfileById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of UserProfile to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/UserProfile"),
     *         @OA\XmlContent(ref="#/components/schemas/UserProfile"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="UserProfile not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/userProfiles",
     *     tags={"UserProfile"},
     *     summary="Add a new UserProfile to the store",
     *     operationId="addUserProfile",
     *     @OA\Response(
     *         response=201,
     *         description="Created UserProfile",
     *         @OA\JsonContent(ref="#/components/schemas/UserProfile"),
     *         @OA\XmlContent(ref="#/components/schemas/UserProfile"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/UserProfile"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/userProfiles/{id}",
     *     tags={"UserProfile"},
     *     summary="Update an existing UserProfile",
     *     operationId="updateUserProfile",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="UserProfile id to update",
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
     *         description="UserProfile not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/UserProfile"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/userProfiles/{id}",
     *     tags={"UserProfile"},
     *     summary="Deletes a UserProfile",
     *     operationId="deleteUserProfile",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="UserProfile id to delete",
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