<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MemberModel;

class Member extends Controller
{
    public function index()
    {

        return view('header')
            . view('top_navbar')
            . view('menu')
            . view('member')
            . view('footer');
    }


    public function add()
    {
        $session = session();
        if ($session->get('sponsor_id')) {
            $data['sponsor_id'] = $session->get('sponsor_id');
            $data['sponsor_name'] = $session->get('sponsor');
        } else {
            $data['sponsor_id'] = '';
            $data['sponsor_name'] = '';
        }
        return view('header')
            . view('top_navbar')
            . view('menu')
            . view('member', $data)
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
        if ($this->request->getPost('add_on')) {
            $addOn = $this->request->getPost('add_on');
        } else {
            $addOn = 0;
        }



        $data = [
            'name' => $name,
            'user_type_id' => 3,
            'phone' => $phone,
            'email' => $email,
            'address' => $address,
            'parent_member_id' => 1,
            'package_id' => 1,
            'addOn_users' => $addOn
        ];

        $result = $model->add($data);
        if ($result) {
            echo "Member added successfully.";
        } else {
            echo "Something went wrong";
        }
        return redirect()->redirect("/members");
    }


    public function profile()
    {
        $session = session();
        // Get Sponsor ID, Name from Session
        if ($session->get('sponsor_id')) {
            $data['sponsor_id'] = $session->get('sponsor_id');
            $data['sponsor_name'] = $session->get('sponsor');
        } else {
            $data['sponsor_id'] = '';
            $data['sponsor_name'] = '';
        }
        return view('list_header')
            . view('top_navbar')
            . view('menu')
            . view('profile', $data)
            . view('list_footer');
    }

    public function list()
    {
        $model = new MemberModel();
        $result = $model->get();
        if ($result) {
            $data['members'] = $result;
        } else {
            $data['members'] = [];
        }
        $session = session();
        // Get Sponsor ID, Name from Session
        if ($session->get('sponsor_id')) {
            $data['sponsor_id'] = $session->get('sponsor_id');
            $data['sponsor_name'] = $session->get('sponsor');
        } else {
            $data['sponsor_id'] = '';
            $data['sponsor_name'] = '';
        }
        return view('list_header')
            . view('top_navbar')
            . view('menu')
            . view('member_list', $data)
            . view('list_footer');
    }
}
