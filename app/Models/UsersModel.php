<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class UsersModel extends BaseModel
{
    protected $table = 'users';
    protected $returnType = 'App\Entities\Users';
    protected $primaryKey = 'id';    
    protected $allowedFields = [
        'name',
		'email',
		'email_verified_at',
		'phone',
		'password',
		'remember_token',
		'created_at',
		'updated_at'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[20]|required|is_unique[users.id,id,{id}]',
		'name' => 'max_length[255]|required',
		'email' => 'max_length[255]|required',
		'phone' => 'numeric|max_length[11]|required',
		'password' => 'max_length[255]|required',
		'remember_token' => 'max_length[100]'
    ];   
}
