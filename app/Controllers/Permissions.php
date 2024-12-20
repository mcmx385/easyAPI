<?php namespace App\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class Permissions extends BaseResourceController
{
    protected $modelName = 'App\Models\PermissionsModel';  

     /**
     * @OA\Get(
     *     path="/permissions",
     *     tags={"Permissions"},
     *     summary="Find list Permissions",
     *     description="Returns list of Permissions",
     *     operationId="getPermissions",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Permissions")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Permissions")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Permissions")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="Permissions not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/permissions/{id}",
     *     tags={"Permissions"},
     *     summary="Find Permissions by ID",
     *     description="Returns a single Permissions",
     *     operationId="getPermissionsById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Permissions to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Permissions"),
     *         @OA\XmlContent(ref="#/components/schemas/Permissions"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Permissions not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/permissions",
     *     tags={"Permissions"},
     *     summary="Add a new Permissions to the store",
     *     operationId="addPermissions",
     *     @OA\Response(
     *         response=201,
     *         description="Created Permissions",
     *         @OA\JsonContent(ref="#/components/schemas/Permissions"),
     *         @OA\XmlContent(ref="#/components/schemas/Permissions"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Permissions"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/permissions/{id}",
     *     tags={"Permissions"},
     *     summary="Update an existing Permissions",
     *     operationId="updatePermissions",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Permissions id to update",
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
     *         description="Permissions not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Permissions"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/permissions/{id}",
     *     tags={"Permissions"},
     *     summary="Deletes a Permissions",
     *     operationId="deletePermissions",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Permissions id to delete",
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