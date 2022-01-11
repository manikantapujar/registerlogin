<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UserModel;

use App\Controllers\BaseController;

class SigninController extends BaseController
{
    public function index()
    {
        helper(['form']);
        echo view('signin');
    }

    public function loginAuth()
    {
        $userModel = new UserModel();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        
        $data = $userModel->where('email', $email)->first();
        
        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'id' => $data['id'],
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'isLoggedIn' => TRUE
                ];
                session()->set($ses_data);
                return redirect()->to('/profile');

            }else{
                session()->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/signin');
            }

        }else{
            session()->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/signin');
        }
    }
    // public function welcome()
    // {
    //     // $this->load->view('newview');
    //     return redirect()->to('newview');

    // }
    
    public function logout()
    {
        // echo ("HI");
        // print_r($this);
        // die();
        // $session = session();
        session()->sess_destroy;
        // $session->sess_destroy();
        return redirect()->to('/signin');
        

        // $newdata = array(
        //     'name'  =>'',
        //     'email' => '',
        //     'logged_in' => FALSE,
        //    );

        //    $session->unset_userdata($newdata);
        //    $session->sess_destroy();
        //    return redirect()->to('/signin');

        //  redirect('default_controller','refresh');
    }
    public function gallery()
    {
        echo view('Gallery');
        
    }
    public function contact()
    {
        echo view('Contact');
        
    }
    public function welcome1()
    {
        echo view('welcomehome');
        
    }
}
