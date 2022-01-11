<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SendemailController extends BaseController
{
    public function index()
    {
        //
    }
    public function email($message = NULL){
        $this->load->library('email');
    
        $mydata = array('message' => 'I am a message that will be passed to a view');
        $message = $this->load->view('my_email_template', $mydata, true);        
    
        $this->email->mailtype('html');
        $this->email->from('manikantapujar@gmail.com');
        $this->email->to('manikantapujar@gmail.com'); 
    
        $this->email->subject('Email Test');
        $this->email->message($message);    
    
        $this->email->send();
    }
}
// $this->email->from($this->input->post('email'), $this->input->post('name'));
// $this->email->to($this->Email_model->emailsend());
// $this->email->subject('Hello This is an email');