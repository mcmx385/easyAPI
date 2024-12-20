<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class MigrationsModel extends BaseModel
{
    protected $table = 'migrations';
    protected $returnType = 'App\Entities\Migrations';
    protected $primaryKey = 'id';    
    protected $allowedFields = [
        'migration',
		'batch'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[10]|required|is_unique[migrations.id,id,{id}]',
		'migration' => 'max_length[255]|required',
		'batch' => 'numeric|max_length[11]|required'
    ];   
}
