<?php

namespace App\Controllers\FrontEnd;
use CodeIgniter\Controller;
use App\Models\DocumentsModel;
use App\Models\PrivateJobModel;
use App\Models\RojgarNewsModel;
use App\Models\VedioLinkModel;
use App\Models\SyllabusPostModel;
use App\Models\ImportantLinkModel;
use App\Models\OfflineJobModel;
use App\Models\AdmitCardModel;
use App\Models\AnswerKeyModel;
use App\Models\AdmissionModel;
use App\Models\AdminUserModel;
use App\Models\GovermentJobModel;

use App\Controllers\BaseController;

class FrontHome extends BaseController
{

	
	public function __construct()
    {
       helper(['form', 'url']);
	  
    }

    public function index()
    {
        $data = [];
		$modelAdmitCard = new AdmitCardModel();
		$data['admit_card'] = $modelAdmitCard->findAll();
        
       $modelGovermentJob = new GovermentJobModel();
		$data['goverment_job'] = $modelGovermentJob->findAll();


        $modelSyllabus = new SyllabusPostModel();
		$data['syllabus'] = $modelSyllabus->findAll();


        $modelStudyNotes = new DocumentsModel();
		$data['study_notes'] = $modelStudyNotes->findAll();

        $modelPrivateJobModel = new PrivateJobModel();
		$data['private_job'] = $modelPrivateJobModel->findAll();

        $modelAdmissionModel = new AdmissionModel();
		$data['admission'] = $modelAdmissionModel->findAll();

        $modelImportantLinkModel = new ImportantLinkModel();
		$data['important_link'] = $modelImportantLinkModel->findAll();

        $modelOfflineJobModel = new OfflineJobModel();
		$data['offline_job'] = $modelOfflineJobModel->findAll();

        $modelVedioLinkModel = new VedioLinkModel();
		$data['vedio_link'] = $modelVedioLinkModel->findAll();

        $modelAnswerKeyModel = new AnswerKeyModel();
		$data['answer_key'] = $modelAnswerKeyModel->findAll();



        return view('front-end/index', $data);
    }
	
	

    public function results_more_click()
    {
		//print_r("sgdagds"); die;
        return view('/front-end/results_more_click');
    }


    public function admitcard_more_click()
    {
		//print_r("sgdagds"); die;
        return view('/front-end/admitcard_more_click');
    }


    public function answerkey_more_click()
    {
		 return view('/front-end/answerkey_more_click');
    }

    public function govjob_more_click()
    {
		 return view('/front-end/govjob_more_click');
    }


    public function importantlink_more_click()
    {
		 return view('/front-end/importantlink_more_click');
    }

    public function latestnews_more_click()
    {
		 return view('/front-end/latestnews_more_click');
    }

    public function notes_more_click()
    {
		 return view('/front-end/notes_more_click');
    }

    public function offlineform_more_click()
    {
		 return view('/front-end/offlineform_more_click');
    }


    public function privatejob_more_click()
    {
		 return view('/front-end/privatejob_more_click');
    }


    public function admission_more_click()
    {
		 return view('/front-end/admission_more_click');
    }


    public function syllabus_more_click()
    {
        
		 return view('/front-end/syllabus_more_click');
    }

    public function vediolink_more_click()
    {
		 return view('/front-end/vediolink_more_click');
    }

}
