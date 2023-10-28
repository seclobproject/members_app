<?php

 namespace App\Controllers;
 use CodeIgniter\Controller;
 use App\Models\MemberModel;
class Member extends Controller
{
    public function index()
    {
        
        return view('header')
            . view('menu')
            . view('member')
            . view('footer');
    }


    public function add()
    {
        if(isset($_SESSION['sponsor_id'])){
            $data['sponsor_id'] = $_SESSION['sponsor_id'];
        }else{
            $data['sponsor_id'] = '';
        }
        return view('header')
            . view('menu')
            . view('member',$data)
            . view('footer');
    }
    public function save()
    {
        $model = new MemberModel();
        $data = $_POST;
        $name = $this->request->getPost('name');
        $phone = $this->request->getPost('phone');
        $email = $this->request->getPost('email');        
        $address = $this->request->getPost('address');
        $package = $this->request->getPost('package');
        $addOn = $this->request->getPost('addOn');


        $data = [
            'name' => $name,
            'member_type'=>'User',
            'phone' => $phone,
            'email' => $email,
            'address' => $address,
            'parent_member_id'=>1,
            'package_id'=>1,
            'addOn_users'=>$addOn
        ];

        $result = $model->add($data);
        if ($result) {
            echo "New package added successfully.";
        } else {
            echo "Something went wrong";
        }
        return redirect()->redirect("/package");
    }

    
    public function profile()
    {

        return view('list_header') 
        .  view('menu') 
        . view('profile')
        . view('list_footer');
    }

    public function list(){
        $model = new MemberModel();    
		$result = $model->get();
        if ($result) {
            $data['members'] = $result;
        }else{
            $data['members'] = [];
        }
        return view('list_header') 
        .  view('menu') 
        . view('member_list', $data)
        . view('list_footer');       
    }
}
