<?php namespace App\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class PermissionRoles extends BaseResourceController
{
    protected $modelName = 'App\Models\PermissionRoleModel';  

     /**
     * @OA\Get(
     *     path="/permissionRoles",
     *     tags={"PermissionRole"},
     *     summary="Find list PermissionRole",
     *     description="Returns list of PermissionRole",
     *     operationId="getPermissionRole",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/PermissionRole")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/PermissionRole")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/PermissionRole")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="PermissionRole not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/permissionRoles/{id}",
     *     tags={"PermissionRole"},
     *     summary="Find PermissionRole by ID",
     *     description="Returns a single PermissionRole",
     *     operationId="getPermissionRoleById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of PermissionRole to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/PermissionRole"),
     *         @OA\XmlContent(ref="#/components/schemas/PermissionRole"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="PermissionRole not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/permissionRoles",
     *     tags={"PermissionRole"},
     *     summary="Add a new PermissionRole to the store",
     *     operationId="addPermissionRole",
     *     @OA\Response(
     *         response=201,
     *         description="Created PermissionRole",
     *         @OA\JsonContent(ref="#/components/schemas/PermissionRole"),
     *         @OA\XmlContent(ref="#/components/schemas/PermissionRole"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/PermissionRole"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/permissionRoles/{id}",
     *     tags={"PermissionRole"},
     *     summary="Update an existing PermissionRole",
     *     operationId="updatePermissionRole",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="PermissionRole id to update",
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
     *         description="PermissionRole not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/PermissionRole"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/permissionRoles/{id}",
     *     tags={"PermissionRole"},
     *     summary="Deletes a PermissionRole",
     *     operationId="deletePermissionRole",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="PermissionRole id to delete",
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