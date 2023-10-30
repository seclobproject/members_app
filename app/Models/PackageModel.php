<?php

namespace App\Models;

use CodeIgniter\Model;

class PackageModel extends Model
{
    protected $table = 'package_tbl';
    //protected $primaryKey = 'product_id';
    //protected $allowedFields = ['product_name','product_price'];
    function add_plan($data)
    {
        $data = array(
            'name' => $data['name'],
            'amount' => $data['name']
        );

        //$this->db->insert('plan_tbl', $data);
    }

    function add($data)
    {
        return $this->db
            ->table('package_tbl')
            ->insert($data);
    }

    public function get($id = false)
    {
        if ($id === false) {
            $query = $this->db->query('SELECT * FROM package_tbl');
            $results = $query->getResultArray();          
            return $results;
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }
}