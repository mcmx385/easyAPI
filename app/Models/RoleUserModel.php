<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class RoleUserModel extends BaseModel
{
    protected $table = 'role_user';
    protected $returnType = 'App\Entities\RoleUser';
    protected $primaryKey = 'id';    
    protected $allowedFields = [
        'user_id',
		'role_id',
		'created_at',
		'updated_at'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[20]|required|is_unique[role_user.id,id,{id}]',
		'user_id' => 'numeric|max_length[20]|required',
		'role_id' => 'numeric|max_length[20]|required'
    ];   
}
