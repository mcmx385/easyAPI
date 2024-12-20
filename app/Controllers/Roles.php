<?php namespace App\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class Roles extends BaseResourceController
{
    protected $modelName = 'App\Models\RolesModel';  

     /**
     * @OA\Get(
     *     path="/roles",
     *     tags={"Roles"},
     *     summary="Find list Roles",
     *     description="Returns list of Roles",
     *     operationId="getRoles",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Roles")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Roles")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Roles")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="Roles not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/roles/{id}",
     *     tags={"Roles"},
     *     summary="Find Roles by ID",
     *     description="Returns a single Roles",
     *     operationId="getRolesById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Roles to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Roles"),
     *         @OA\XmlContent(ref="#/components/schemas/Roles"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Roles not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/roles",
     *     tags={"Roles"},
     *     summary="Add a new Roles to the store",
     *     operationId="addRoles",
     *     @OA\Response(
     *         response=201,
     *         description="Created Roles",
     *         @OA\JsonContent(ref="#/components/schemas/Roles"),
     *         @OA\XmlContent(ref="#/components/schemas/Roles"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Roles"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/roles/{id}",
     *     tags={"Roles"},
     *     summary="Update an existing Roles",
     *     operationId="updateRoles",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Roles id to update",
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
     *         description="Roles not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Roles"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/roles/{id}",
     *     tags={"Roles"},
     *     summary="Deletes a Roles",
     *     operationId="deleteRoles",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Roles id to delete",
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