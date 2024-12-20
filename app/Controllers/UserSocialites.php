<?php namespace App\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class UserSocialites extends BaseResourceController
{
    protected $modelName = 'App\Models\UserSocialiteModel';  

     /**
     * @OA\Get(
     *     path="/userSocialites",
     *     tags={"UserSocialite"},
     *     summary="Find list UserSocialite",
     *     description="Returns list of UserSocialite",
     *     operationId="getUserSocialite",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/UserSocialite")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/UserSocialite")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/UserSocialite")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="UserSocialite not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/userSocialites/{id}",
     *     tags={"UserSocialite"},
     *     summary="Find UserSocialite by ID",
     *     description="Returns a single UserSocialite",
     *     operationId="getUserSocialiteById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of UserSocialite to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/UserSocialite"),
     *         @OA\XmlContent(ref="#/components/schemas/UserSocialite"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="UserSocialite not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/userSocialites",
     *     tags={"UserSocialite"},
     *     summary="Add a new UserSocialite to the store",
     *     operationId="addUserSocialite",
     *     @OA\Response(
     *         response=201,
     *         description="Created UserSocialite",
     *         @OA\JsonContent(ref="#/components/schemas/UserSocialite"),
     *         @OA\XmlContent(ref="#/components/schemas/UserSocialite"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/UserSocialite"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/userSocialites/{id}",
     *     tags={"UserSocialite"},
     *     summary="Update an existing UserSocialite",
     *     operationId="updateUserSocialite",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="UserSocialite id to update",
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
     *         description="UserSocialite not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/UserSocialite"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/userSocialites/{id}",
     *     tags={"UserSocialite"},
     *     summary="Deletes a UserSocialite",
     *     operationId="deleteUserSocialite",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="UserSocialite id to delete",
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