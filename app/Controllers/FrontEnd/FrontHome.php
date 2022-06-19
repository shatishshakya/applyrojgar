<?php

namespace App\Controllers\Admin;
use CodeIgniter\Controller;

use App\Controllers\BaseController;

class FrontHome extends BaseController
{

	
	public function __construct()
    {
       helper(['form', 'url']);
	  
    }

    public function index()
    {
		
        return view('admin/index');
    }
	
	
}
