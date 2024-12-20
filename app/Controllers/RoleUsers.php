<?php namespace App\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class RoleUsers extends BaseResourceController
{
    protected $modelName = 'App\Models\RoleUserModel';  

     /**
     * @OA\Get(
     *     path="/roleUsers",
     *     tags={"RoleUser"},
     *     summary="Find list RoleUser",
     *     description="Returns list of RoleUser",
     *     operationId="getRoleUser",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/RoleUser")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/RoleUser")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/RoleUser")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="RoleUser not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/roleUsers/{id}",
     *     tags={"RoleUser"},
     *     summary="Find RoleUser by ID",
     *     description="Returns a single RoleUser",
     *     operationId="getRoleUserById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of RoleUser to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/RoleUser"),
     *         @OA\XmlContent(ref="#/components/schemas/RoleUser"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="RoleUser not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/roleUsers",
     *     tags={"RoleUser"},
     *     summary="Add a new RoleUser to the store",
     *     operationId="addRoleUser",
     *     @OA\Response(
     *         response=201,
     *         description="Created RoleUser",
     *         @OA\JsonContent(ref="#/components/schemas/RoleUser"),
     *         @OA\XmlContent(ref="#/components/schemas/RoleUser"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/RoleUser"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/roleUsers/{id}",
     *     tags={"RoleUser"},
     *     summary="Update an existing RoleUser",
     *     operationId="updateRoleUser",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="RoleUser id to update",
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
     *         description="RoleUser not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/RoleUser"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/roleUsers/{id}",
     *     tags={"RoleUser"},
     *     summary="Deletes a RoleUser",
     *     operationId="deleteRoleUser",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="RoleUser id to delete",
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