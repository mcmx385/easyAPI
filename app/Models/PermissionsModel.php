<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class PermissionsModel extends BaseModel
{
    protected $table = 'permissions';
    protected $returnType = 'App\Entities\Permissions';
    protected $primaryKey = 'id';    
    protected $allowedFields = [
        'name',
		'slug',
		'description',
		'model',
		'created_at',
		'updated_at',
		'deleted_at'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[10]|required|is_unique[permissions.id,id,{id}]',
		'name' => 'max_length[191]|required',
		'slug' => 'max_length[191]|required',
		'description' => 'max_length[191]',
		'model' => 'max_length[191]'
    ];   
}
