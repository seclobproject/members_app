<?php

namespace App\Models;

use CodeIgniter\Model;

class MemberModel extends Model
{
    

    function add($data)
    {
        return $this->db
            ->table('member')
            ->insert($data);
    }

    public function get($id = false)
    {
        if ($id === false) {
            $query = $this->db->query('SELECT * FROM member');
            $results = $query->getResultArray();            
            return $results;
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }

    public function get_sponsor($id = false)
    {
        if ($id === false) {
            $query = $this->db->query('SELECT * FROM member');
            $results = $query->getResultArray();            
            return $results;
        } else {
            $query = $this->db->query('SELECT * FROM `company_tbl` as a , member as b where a.member_id = b.id AND b.id='.$id);
            $results = $query->getResultArray();            
            return $results;
            //return $this->getWhere(['id' => $id]);
        }
    }
}