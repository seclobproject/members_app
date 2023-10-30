<?php

namespace App\Models;

use CodeIgniter\Model;

class ApiModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'package_tbl';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    //protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function packages($id = false)
    {
        if ($id === false) {
            $query = $this->db->query('SELECT * FROM package_tbl');
            //$data =  $query->getResultObject();
            //print_r(json_encode($data));
            //die();
            $results = $query->getResultArray();          
            return $results;
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }
}
