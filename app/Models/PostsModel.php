<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class PostsModel extends BaseModel
{
    protected $table = 'posts';
    protected $returnType = 'App\Entities\Posts';
    protected $primaryKey = 'id';    
    protected $allowedFields = [
        'user_id',
		'title',
		'body',
		'cover_image',
		'created_at',
		'updated_at'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[20]|required|is_unique[posts.id,id,{id}]',
		'user_id' => 'numeric|max_length[20]|required',
		'title' => 'max_length[255]|required',
		'body' => 'required',
		'cover_image' => 'max_length[255]|required'
    ];   
}
