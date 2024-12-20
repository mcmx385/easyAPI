<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class PermissionRoleModel extends BaseModel
{
    protected $table = 'permission_role';
    protected $returnType = 'App\Entities\PermissionRole';
    protected $primaryKey = 'id';    
    protected $allowedFields = [
        'permission_id',
		'role_id',
		'created_at',
		'updated_at',
		'deleted_at'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[10]|required|is_unique[permission_role.id,id,{id}]',
		'permission_id' => 'numeric|max_length[10]|required',
		'role_id' => 'numeric|max_length[10]|required'
    ];   
}
