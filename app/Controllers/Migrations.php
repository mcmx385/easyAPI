<?php namespace App\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class Migrations extends BaseResourceController
{
    protected $modelName = 'App\Models\MigrationsModel';  

     /**
     * @OA\Get(
     *     path="/migrations",
     *     tags={"Migrations"},
     *     summary="Find list Migrations",
     *     description="Returns list of Migrations",
     *     operationId="getMigrations",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Migrations")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Migrations")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Migrations")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="Migrations not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/migrations/{id}",
     *     tags={"Migrations"},
     *     summary="Find Migrations by ID",
     *     description="Returns a single Migrations",
     *     operationId="getMigrationsById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Migrations to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Migrations"),
     *         @OA\XmlContent(ref="#/components/schemas/Migrations"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Migrations not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/migrations",
     *     tags={"Migrations"},
     *     summary="Add a new Migrations to the store",
     *     operationId="addMigrations",
     *     @OA\Response(
     *         response=201,
     *         description="Created Migrations",
     *         @OA\JsonContent(ref="#/components/schemas/Migrations"),
     *         @OA\XmlContent(ref="#/components/schemas/Migrations"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Migrations"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/migrations/{id}",
     *     tags={"Migrations"},
     *     summary="Update an existing Migrations",
     *     operationId="updateMigrations",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Migrations id to update",
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
     *         description="Migrations not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Migrations"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/migrations/{id}",
     *     tags={"Migrations"},
     *     summary="Deletes a Migrations",
     *     operationId="deleteMigrations",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Migrations id to delete",
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