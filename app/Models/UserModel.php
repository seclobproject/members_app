<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'member';
    protected $allowedFields = ['name', 'email'];
    public function getUsers($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }

    public function user($data)
    {
        $db = \Config\Database::connect();
        $qry = "SELECT * FROM member WHERE email = '".$data['email']."' AND password = '".$data['password']."' LIMIT 1";
        $query = $db->query($qry);
        $row = $query->getRow();
        return $row;

        // //$result = $this->getWhere($data);
        // $db = \Config\Database::connect();
        // $builder = $db->table('user'); // 'user' is the name of your table
        // $builder->select('*'); // names of your columns, single string, separated by a comma
        // $builder->where('email', $data['email']); // where clause
        // $query = $builder->get();
        // print_r($query);
        // die();
        // return $query;
    }

    public function getSponsor($data){
        $db = \Config\Database::connect();
        $qry = "SELECT sponsor_id FROM member as a JOIN company_tbl as b ON a.id=b.member_id WHERE a.id=".$data['id'];
        $query = $db->query($qry);
        $row = $query->getRow();
        return $row;
    }
}