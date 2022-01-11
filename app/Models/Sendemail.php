<?php

namespace App\Models;

use CodeIgniter\Model;

class Sendemail extends Model
{
    public function emailsend() {

    $query = $this->db->query("SELECT email from users");
    $sendTo=array();
    foreach ($query->result() as $row) 
    {
        $sendTo[] = $row->email;
        //     ^^ remove the 'email' index
    }

    return $sendTo; // <-- add this line if you don't have it
    }
}
