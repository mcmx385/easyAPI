<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class FailedJobsModel extends BaseModel
{
    protected $table = 'failed_jobs';
    protected $returnType = 'App\Entities\FailedJobs';
    protected $primaryKey = 'id';    
    protected $allowedFields = [
        'uuid',
		'connection',
		'queue',
		'payload',
		'exception',
		'failed_at'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[20]|required|is_unique[failed_jobs.id,id,{id}]',
		'uuid' => 'max_length[255]|required',
		'connection' => 'required',
		'queue' => 'required',
		'payload' => 'required',
		'exception' => 'required',
		'failed_at' => 'required'
    ];   
}
