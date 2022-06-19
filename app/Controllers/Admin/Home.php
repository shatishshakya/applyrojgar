<?php

namespace App\Controllers\Admin;
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
use App\Controllers\BaseController;

class Home extends BaseController
{

	
	public function __construct()
    {
       helper(['form', 'url']);
	   
    }

	public function index()
    {
		// $pass = password_hash('abc',PASSWORD_DEFAULT);
		// die($pass);
        return view('admin/login');
    }

	public function dashboard()
    {
		if(session()->get('isLoggedIn'))
		{
			return view('admin/dashboard');
		}else{
			return view('admin/login');
		}
        
    }

	

    public function index1()
    {
		//die('Hello');
        return view('admin/index');
    }
	
	

	
	public function gov_job_post()
    {
         return view('admin/job_post');
    }
	
	public function study_materials( $product_id = NULL)
    {	
		
		//return view('study_materials'); -> Direct view open
		// after save  view condition  ...
		$userModel = new DocumentsModel();
		$getData = [];
		//$getData['ActiveMenu'] = '';
		if (!empty($product_id))
			{
				$getData['studymaterialsbyId'] = $userModel->where('id', $product_id)->first();	
			//print_r($getData['studymaterialsbyId']); die;
			}

		//$userModel = new DocumentsModel();
      	$getData['details'] = $userModel->orderBy('id', 'DESC')->findAll();
		return view('admin/study_materials',$getData);
    }
	
	public function rojgar_news()
    {
         return view('admin/rojgar_news');
    }
	
	public function vedio_link()
    {
         return view('admin/vedio_link');
    }
	
	public function private_job()
    {
         return view('admin/private_job');
    }
	
	public function syllabus()
    {
         return view('admin/syllabus');
    }
	
	public function important_link()
    {
         return view('admin/important_link');
    }
	
	public function offline_job_form()
    {
         return view('admin/offline_job_form');
    }
	
	public function admit_card()
    {
         return view('admin/admit_card');
    }
	
	public function admission()
    {
         return view('admin/admission');
    }

	public function answer_key()
    {
         return view('admin/answer_key');
    }
	
	public function storeStudyMaterials() {
		helper(['form', 'url']);
		$input = $this->validate([
            'Heading' => 'required',
            'Description' => 'required',
			'Publication_Date' => 'required',
			
           
        ]);
	// echo '<pre>';
	// print_r($_FILES);
	// $uploadedir= __DIR__ . '/../../public';
	// $img = $this->request->getFile('filename');
	// 	$img->move($uploadedir .'/uploads/studymaterials');
	// echo (WRITEPATH );
	// die;
		$dbModel = new DocumentsModel();
		date_default_timezone_set("Asia/Kolkata");
        $currentdate = date('Y-m-d'); 
		
		if (!$input) {
            return view('study_materials', [
                'validation' => $this->validator
            ]);
        }else {
			$uploadedir=  './public';
			$img = $this->request->getFile('filename');
			//$new_name = $img->mt_rand(5, 10);
			echo $img->move(WRITEPATH . 'uploads');
			//echo ($uploadedir .'/uploads/studymaterials');
			die;


			

		$data = [
			'IndexViewHeading' => $this->request->getVar('IndexViewHeading'),
            'title' => $this->request->getVar('Heading'),
			'description' => $this->request->getVar('Description'),
			'publication_date' => $this->request->getVar('Publication_Date'),
			'documents' =>$img->getName(),
			//'documents' =>$img->getName().mt_rand(100000, 999999),
			//'documents' =>$img->mt_rand(100000, 999999).getName(),
            'date'  => $currentdate,
			
        ];

		// for hide input text not post with php
		//  $data['title'] = $this->request->getVar('Heading');
		//  if(empty($this->request->getVar('editID')))
		//  {
		// 	$data['description'] = $this->request->getVar('Description');
		// 	$data['publication_date'] = $this->request->getVar('Publication_Date');
		// }
		// $data['date'] =  $currentdate;
		

		if(!empty($this->request->getVar('editID')))
		{
			$dbModel->update($this->request->getVar('editID'),$data);
		}else
		{
			$dbModel->insert($data);
		}

		//!empty($this->request->getVar('editID')) ? $dbModel->update($this->request->getVar('editID'),$data); : $dbModel->insert($data);
		
		return $this->response->redirect('/admin/study-materials-report');
    }
}
	

	public function deleteDocuments($id = null){
        $userModel = new DocumentsModel();
        $data['user'] = $userModel->where('id', $id)->delete($id);
        return $this->response->redirect('admin/Home/study_materials_report');
    }    
	
	public function storePrivateJob() {
        $dbModel = new PrivateJobModel();
		date_default_timezone_set("Asia/Kolkata");
        $currentdate = date('Y-m-d'); 
		$data = [
			'IndexViewHeading' => $this->request->getVar('IndexViewHeading'),
            'CompanyName' => $this->request->getVar('Company'),
			'JobLocation' => $this->request->getVar('Location'),
			'Experiance' => $this->request->getVar('Experiance'),
			'Salary' => $this->request->getVar('Salary'),
			'NoticePeriod' => $this->request->getVar('NoticePeriod'),
			'JobDescrption' => $this->request->getVar('JobDescrption'),
			'UsefulEmail' => $this->request->getVar('UsefulEmail'),
			'UsefulContactNumber' => $this->request->getVar('UsefulContact'),
			'UsefulLink' => $this->request->getVar('UsefulLink'),
			'UpdateDate'  => $currentdate,
        ];
        $dbModel->insert($data);
		return $this->response->redirect('admin/Home/private_job');
    }
	
	
	public function storeRojgarNews() {
        $dbModel = new RojgarNewsModel();
		date_default_timezone_set("Asia/Kolkata");
        $currentdate = date('Y-m-d'); 
		$data = [
			'IndexViewHeading' => $this->request->getVar('IndexViewHeading'),
            'Heading' => $this->request->getVar('Heading'),
			'Department' => $this->request->getVar('Department'),
			'PublicationDate' => $this->request->getVar('PublicationDate'),
			'Adv' => $this->request->getVar('Adv'),
			'PaperName' => $this->request->getVar('PaperName'),
			'UploadFileName' => $this->request->getVar('UploadFilename'),
			'UpdateDate'  => $currentdate,
        ];
        $dbModel->insert($data);
		return $this->response->redirect('admin/Home/rojgar_news');
    }



	public function storeAnswerKey() {
        $dbModel = new AnswerKeyModel();
		date_default_timezone_set("Asia/Kolkata");
        $currentdate = date('Y-m-d'); 
		
		$data = [
			'IndexViewHeading' => $this->request->getVar('IndexViewHeading'),
            'NamePost' => $this->request->getVar('NamePost'),
			'PostDate' => $this->request->getVar('PostDate'),
			'ShortInformation' => $this->request->getVar('PubliShortInformationcationDate'),
			'Department' => $this->request->getVar('Department'),
			'DepartmentAdvtDetails' => $this->request->getVar('DepartmentAdvtDetails'),
			'ApplicationBegin' => $this->request->getVar('ApplicationBegin'),
			'LastDateApplication' => $this->request->getVar('LastDateApplication'),
			'ExamDate' => $this->request->getVar('ExamDate'),
			'AdmitCardAvailableDate' => $this->request->getVar('AdmitCardAvailableDate'),
			'AdmitCardLink' => $this->request->getVar('AdmitCardLink'),
			'AnswerKeyLink' => $this->request->getVar('AnswerKeyLink'),
			'OfficialWebsite' => $this->request->getVar('OfficialWebsite'),
			'UpdateDate'  => $currentdate,
        ];
        $dbModel->insert($data);
		
		return $this->response->redirect('/admin/answer-key');
    }
	
	
	
	 public function formValidationVedioLink() {
        helper(['form', 'url']);
        
        $input = $this->validate([
            'name' => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'phone' => 'required|numeric|max_length[10]'
        ]);
	 }
	
	
	public function storeVedioLink() {
		
		$input = $this->validate([
            'Title' => 'required',
            'Duration' => 'required',
            'Channel' => 'required'
        ]);
		
		if (!$input) {
            echo view('vedio_link', [
                'validation' => $this->validator
            ]);
			}
		else{
		
		
		
        $dbModel = new VedioLinkModel();
		date_default_timezone_set("Asia/Kolkata");
        $currentdate = date('Y-m-d'); 
		
		$data = [
			'IndexViewHeading' => $this->request->getVar('IndexViewHeading'),
            'Title' => $this->request->getVar('Title'),
			'Duration' => $this->request->getVar('Duration'),
			'Channel' => $this->request->getVar('Channel'),
			'Description' => $this->request->getVar('Description'),
			'UploadDate' => $this->request->getVar('UploadDate'),
			'Subject' => $this->request->getVar('Subject'),
			'TeacherName' => $this->request->getVar('TeacherName'),
			'Link' => $this->request->getVar('Link'),
			'UpdateDate'  => $currentdate,
        ];
		
        $dbModel->insert($data);
		return $this->response->redirect('admin/Home/vedio_link');
    }
	}
	public function storeSyllabus() {
        $dbModel = new SyllabusPostModel();
		date_default_timezone_set("Asia/Kolkata");
        $currentdate = date('Y-m-d'); 
		$data = [
			'IndexViewHeading' => $this->request->getVar('IndexViewHeading'),
            'NamePost' => $this->request->getVar('NamePost'),
			'PostDate' => $this->request->getVar('PostDate'),
			'ShortInformation' => $this->request->getVar('ShortInformation'),
			'Department' => $this->request->getVar('Department'),
			'DepartmentAdvtDetails' => $this->request->getVar('DepartmentAdvtDetails'),
			'AdvtNo' => $this->request->getVar('AdvtNo'),
			'SyllabusAvailableDate' => $this->request->getVar('SyllabusAvailableDate'),
			'UploadDate' => $this->request->getVar('UploadDate'),
			'OfficialWebsite' => $this->request->getVar('OfficialWebsite'),
			'UpdateDate'  => $currentdate,
        ];
		
        $dbModel->insert($data);
		return $this->response->redirect('/admin/syllabus-report');
    }
	
	public function storeImportantLink() {
		
        $dbModel = new ImportantLinkModel();
		date_default_timezone_set("Asia/Kolkata");
        $currentdate = date('Y-m-d'); 
		$data = [
			'IndexViewHeading' => $this->request->getVar('IndexViewHeading'),
            'NamePost' => $this->request->getVar('NamePost'),
			'PostDate' => $this->request->getVar('PostDate'),
			'ShortInformation' => $this->request->getVar('ShortInformation'),
			'Department' => $this->request->getVar('Department'),
			'DepartmentAdvtDetails' => $this->request->getVar('DepartmentAdvtDetails'),
			'UploadDate' => $this->request->getVar('UploadDate'),
			'OfficialLink' => $this->request->getVar('OfficialLink'),
			'OfficialWebsite' => $this->request->getVar('OfficialWebsite'),
			'UpdateDate'  => $currentdate,
        ];
	
		//print_r($data);
		//die;
        $dbModel->insert($data);
		return $this->response->redirect('/admin/important-link-report');
    }
	
	public function storeOfflineJob() {
        $dbModel = new OfflineJobModel();
		date_default_timezone_set("Asia/Kolkata");
        $currentdate = date('Y-m-d'); 
		$data = [
			'IndexViewHeading' => $this->request->getVar('IndexViewHeading'),
            'NamePost' => $this->request->getVar('NamePost'),
			'PostDate' => $this->request->getVar('PostDate'),
			'ShortInformation' => $this->request->getVar('ShortInformation'),
			'Department' => $this->request->getVar('Department'),
			'DepartmentAdvtDetails' => $this->request->getVar('DepartmentAdvtDetails'),
			'UploadDate' => $this->request->getVar('UploadDate'),
			'Notification' => $this->request->getVar('Notification'),
			'OfficialWebsite' => $this->request->getVar('OfficialWebsite'),
			'UpdateDate'  => $currentdate,
        ];
		
        $dbModel->insert($data);
		return $this->response->redirect('admin/Home/offline_job_form');
    }
	
	public function storeAdmitCard() {
        $dbModel = new AdmitCardModel();
		date_default_timezone_set("Asia/Kolkata");
        $currentdate = date('Y-m-d'); 
		$data = [
			
			'IndexViewHeading' => $this->request->getVar('IndexViewHeading'),
            'NamePost' => $this->request->getVar('NamePost'),
			'PostDate' => $this->request->getVar('PostDate'),
			'ShortInformation' => $this->request->getVar('ShortInformation'),
			'Department' => $this->request->getVar('Department'),
			'DepartmentAdvtDetails' => $this->request->getVar('DepartmentAdvtDetails'),
			'UploadDate' => $this->request->getVar('UploadDate'),
			'AdmitCardLink' => $this->request->getVar('AdmitCardLink'),
			'OfficialWebsite' => $this->request->getVar('OfficialWebsite'),
			'UpdateDate'  => $currentdate,
        ];
		
        $dbModel->insert($data);
		return $this->response->redirect('/admin/admit-card-report');
    }


	public function storeAdmission() {
        $dbModel = new AdmissionModel();
		date_default_timezone_set("Asia/Kolkata");
        $currentdate = date('d-m-Y'); 
		$data = [
			'IndexViewHeading' => $this->request->getVar('IndexViewHeading'),
            'NamePost' => $this->request->getVar('NamePost'),
			'PostDate' => $this->request->getVar('PostDate'),
			'ShortInformation' => $this->request->getVar('ShortInformation'),
			'Department' => $this->request->getVar('Department'),
			'DepartmentAdvtDetails' => $this->request->getVar('DepartmentAdvtDetails'),
			'UploadDate' => $this->request->getVar('UploadDate'),
			'RegistrationStart' => $this->request->getVar('RegistrationStart'),
			'RegistrationFees' => $this->request->getVar('RegistrationFees'),
			'AdmissionFormLink' => $this->request->getVar('AdmissionFormLink'),
			'OfficialWebsite' => $this->request->getVar('OfficialWebsite'),
			'UpdateDate'  => $currentdate,
        ];
		
        $dbModel->insert($data);
		
		return $this->response->redirect('/admin/admission-report');
    }


	public function admit_card_report($product_id = NULL)
    {
		$userModel = new AdmitCardModel();
		$getData = [];
		if (!empty($product_id))
			{
				$getData['admincardreportbyId'] = $userModel->where('id', $product_id)->first();	
			}
		$getData['details'] = $userModel->orderBy('id', 'DESC')->findAll();	

         return view('admin/admit_card_report',$getData);
    }


	public function syllabus_report($product_id = NULL)
    {
		$userModel = new SyllabusPostModel();
		$getData = [];
		if (!empty($product_id))
			{
				$getData['syllabusbyId'] = $userModel->where('id', $product_id)->first();	
			}
		$getData['details'] = $userModel->orderBy('id', 'DESC')->findAll();
		return view('admin/syllabus_report',$getData);
    }


	public function important_link_report( $product_id = NULL)
    {
		$userModel = new ImportantLinkModel();
		$getData = [];
		if (!empty($product_id))
			{
				$getData['importantlinkreportbyId'] = $userModel->where('id', $product_id)->first();	
			}
		$getData['details'] = $userModel->orderBy('id', 'DESC')->findAll();	

         return view('admin/important_link_report',$getData);
    }

	

	public function study_materials_report( $product_id = NULL)
    {

		$userModel = new DocumentsModel();
		$getData = [];
		if (!empty($product_id))
			{
				$getData['studymaterialsbyId'] = $userModel->where('id', $product_id)->first();	
			}
		$getData['details'] = $userModel->orderBy('id', 'DESC')->findAll();
		return view('admin/study_materials_report',$getData);
     
    }

	
	public function rojgar_news_report()
    {
         return view('admin/rojgar_news_report');
    }
	
	public function private_job_report()
    {
         return view('admin/private_job_report');
    }
	
	
	public function admission_report( $product_id = NULL )
    {
		$userModel = new AdmissionModel();
		$getData = [];
		if (!empty($product_id))
			{
				$getData['admissionbyId'] = $userModel->where('id', $product_id)->first();	
			}
		$getData['details'] = $userModel->orderBy('id', 'DESC')->findAll();


         return view('admin/admission_report',$getData);
    }

	

	public function vedio_link_report()
    {
         return view('admin/vedio_link_report');
    }

}
