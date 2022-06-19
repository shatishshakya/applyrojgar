<?php

namespace App\Controllers\Admin;
use CodeIgniter\Controller;
use App\Models\AdminUserModel;

use App\Controllers\BaseController;

class LoginController extends BaseController
{

	
	public function __construct()
    {
       helper(['form', 'url']);
	  
    }

    public function signinAuth()
    {
        $session = session();
        $dbModel = new AdminUserModel();
		
        $UserName = $this->request->getVar('UserName');
        $UserPass = $this->request->getVar('UserPass');
		

        $data = $dbModel->where('UserName', $UserName)->first();
		//print_r($data);
		//die();
        if($data){
            $pass = $data['UserPass'];
            $verify_pass = password_verify($UserPass, $pass);
			//print_r($verify_pass);
			//die();
            if($verify_pass){
				
                $ses_data = [
                    'UserName'       => $data['UserName'],
                    'UserPass'     => $data['UserPass'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
				//	echo "login success";
                return redirect()->to('/admin/dashboard');
            }else{
				//echo "Wrong Password";
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/');
            }
        }else{
			//echo "Email not Found";
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/');
        }
    }
	
	
	
}
