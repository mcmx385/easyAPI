<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class PasswordResetsModel extends BaseModel
{
    protected $table = 'password_resets';
    protected $returnType = 'App\Entities\PasswordResets';
    protected $primaryKey = 'id';    
    protected $allowedFields = [
        'email',
		'token',
		'created_at'
    ];
    protected $validationRules = [
        'email' => 'max_length[255]|required',
		'token' => 'max_length[255]|required'
    ];   
}
