<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class RolesModel extends BaseModel
{
    protected $table = 'roles';
    protected $returnType = 'App\Entities\Roles';
    protected $primaryKey = 'id';    
    protected $allowedFields = [
        'name',
		'created_at',
		'updated_at'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[20]|required|is_unique[roles.id,id,{id}]',
		'name' => 'max_length[255]|required'
    ];   
}
