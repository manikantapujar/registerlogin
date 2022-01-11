<?php

namespace App\Controllers;
use CodeIgniter\Controller;


use App\Controllers\BaseController;

class ProfileController extends BaseController
{
    public function index()
    {
        // $session = session();
        // echo "Hello : ".$session->get('name');
        // echo "</br>";
        // echo "Welcome to the blog ";
        // return redirect()->to('/signin');
        // $this->load->helper('url');
        // if (condition == TRUE) {
        // redirect('newview');
        // }
        //
        // return redirect()->to('newview');
        echo view('welcomehome');
        // echo view('newview');


    }
}
