<?php

namespace App\Models;

use CodeIgniter\Model;

class AnswerKeyModel extends Model
{
	//protected $DBGroup              = 'default';
	protected $table                = 'answer_key';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = true;
	protected $protectFields        = true;
	protected $allowedFields        = [
		"IndexViewHeading",
		"NamePost",
		"PostDate",
		"ShortInformation",
		"Department",
		"DepartmentAdvtDetails",
		"ApplicationBegin",
		"LastDateApplication",
		"ExamDate",
		"AdmitCardAvailableDate",
		"AdmitCardLink",
		"AnswerKeyLink",
		"OfficialWebsite",
		"UploadDate"
	];

	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];
	
	
	
	 
}