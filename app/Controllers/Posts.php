<?php namespace App\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class Posts extends BaseResourceController
{
    protected $modelName = 'App\Models\PostsModel';  

     /**
     * @OA\Get(
     *     path="/posts",
     *     tags={"Posts"},
     *     summary="Find list Posts",
     *     description="Returns list of Posts",
     *     operationId="getPosts",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Posts")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Posts")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Posts")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="Posts not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/posts/{id}",
     *     tags={"Posts"},
     *     summary="Find Posts by ID",
     *     description="Returns a single Posts",
     *     operationId="getPostsById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Posts to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Posts"),
     *         @OA\XmlContent(ref="#/components/schemas/Posts"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Posts not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/posts",
     *     tags={"Posts"},
     *     summary="Add a new Posts to the store",
     *     operationId="addPosts",
     *     @OA\Response(
     *         response=201,
     *         description="Created Posts",
     *         @OA\JsonContent(ref="#/components/schemas/Posts"),
     *         @OA\XmlContent(ref="#/components/schemas/Posts"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Posts"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/posts/{id}",
     *     tags={"Posts"},
     *     summary="Update an existing Posts",
     *     operationId="updatePosts",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Posts id to update",
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
     *         description="Posts not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Posts"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/posts/{id}",
     *     tags={"Posts"},
     *     summary="Deletes a Posts",
     *     operationId="deletePosts",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Posts id to delete",
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