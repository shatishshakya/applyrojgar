<?php

namespace App\Controllers\FrontEnd;
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
		
        return view('front-end/index');
    }
	
	
}
