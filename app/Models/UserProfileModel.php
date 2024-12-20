<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class UserProfileModel extends BaseModel
{
    protected $table = 'user_profile';
    protected $returnType = 'App\Entities\UserProfile';
    protected $primaryKey = 'id';    
    protected $allowedFields = [
        'user_id',
		'full_name',
		'gender',
		'birthday',
		'avatar',
		'created_at',
		'updated_at'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[10]|required|is_unique[user_profile.id,id,{id}]',
		'user_id' => 'numeric|max_length[20]|required',
		'full_name' => 'max_length[255]|required',
		'gender' => 'max_length[255]|required',
		'birthday' => 'valid_date|required',
		'avatar' => 'max_length[255]|required'
    ];   
}
