<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class UserSocialiteModel extends BaseModel
{
    protected $table = 'user_socialite';
    protected $returnType = 'App\Entities\UserSocialite';
    protected $primaryKey = 'id';    
    protected $allowedFields = [
        'user_id',
		'site',
		'account_id',
		'created_at',
		'updated_at'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[20]|required|is_unique[user_socialite.id,id,{id}]',
		'user_id' => 'numeric|max_length[20]|required',
		'site' => 'max_length[255]|required',
		'account_id' => 'max_length[255]|required'
    ];   
}
