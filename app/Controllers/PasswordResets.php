<?php namespace App\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class PasswordResets extends BaseResourceController
{
    protected $modelName = 'App\Models\PasswordResetsModel';  

     /**
     * @OA\Get(
     *     path="/passwordResets",
     *     tags={"PasswordResets"},
     *     summary="Find list PasswordResets",
     *     description="Returns list of PasswordResets",
     *     operationId="getPasswordResets",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/PasswordResets")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/PasswordResets")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/PasswordResets")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="PasswordResets not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/passwordResets/{id}",
     *     tags={"PasswordResets"},
     *     summary="Find PasswordResets by ID",
     *     description="Returns a single PasswordResets",
     *     operationId="getPasswordResetsById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of PasswordResets to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/PasswordResets"),
     *         @OA\XmlContent(ref="#/components/schemas/PasswordResets"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="PasswordResets not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/passwordResets",
     *     tags={"PasswordResets"},
     *     summary="Add a new PasswordResets to the store",
     *     operationId="addPasswordResets",
     *     @OA\Response(
     *         response=201,
     *         description="Created PasswordResets",
     *         @OA\JsonContent(ref="#/components/schemas/PasswordResets"),
     *         @OA\XmlContent(ref="#/components/schemas/PasswordResets"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/PasswordResets"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/passwordResets/{id}",
     *     tags={"PasswordResets"},
     *     summary="Update an existing PasswordResets",
     *     operationId="updatePasswordResets",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="PasswordResets id to update",
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
     *         description="PasswordResets not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/PasswordResets"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/passwordResets/{id}",
     *     tags={"PasswordResets"},
     *     summary="Deletes a PasswordResets",
     *     operationId="deletePasswordResets",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="PasswordResets id to delete",
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