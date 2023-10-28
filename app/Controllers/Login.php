<?php

namespace App\Controllers;
use App\Models\UserModel;
//session_start();

class Login extends BaseController
{
//     public function __construct()
// {
//     parent::__construct();
//     $this->load->helper('url');

//     $this->load->helper('form');
//     $this->load->helper('url');
//     $this->load->library('form_validation');
//     $this->load->helper('security');

//     //load user model
//     $this->load->model('User');

// }
    public function index(): string
    {
        return view('login');
    }

    public function user()
    {
        $model = new UserModel();
        $req = [];
        if(isset($_POST)){
            //$req = $_POST;
            $req = array('email'=>$_POST['email'],'password'=>md5($_POST['password']));
        }        
		$result = $model->user($req);
        $tmp = (array) $result;
        if(count($tmp) > 0){            
            session_start();
            $user = $result;
            $_SESSION['email'] = $user->email;
            $_SESSION['sponsor'] = $user->name;            
            $_SESSION['userId'] = $user->id;
            $_SESSION['isLoggedIn'] = true;
            //fetch sponsor id
            $req_sponsor = array('id'=>$user->id);
            $result_sponsor = $model->getSponsor($req_sponsor);
            $tmp_sponsor = (array) $result_sponsor;            
            if(count($tmp_sponsor) > 0){                
                $_SESSION['sponsor_id'] = $result_sponsor->sponsor_id;
                print $result_sponsor->sponsor_id;
                die();
            }
            return redirect()->redirect("/package");
        }else{
            return redirect()->redirect("/login");
        }
        // echo view('test', $data);
        
    }

    public function logout(){
        // $session = session();
        // $session->close();
        //session_reset();
        session_start();
        session_destroy();
        return redirect()->redirect("/login");
        //$this->session->close();
    }
}
