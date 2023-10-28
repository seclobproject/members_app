<?php

use App\Models\PackageModel;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\ProductModel;

class ApiController extends ResourceController
{
    use ResponseTrait;
    //protected $modelName = 'App\Models\PackageModel';
    protected $format    = 'json';

    public function index()
    {
        $model = new PackageModel();
        $data = $model->get();
        return $this->respond($data);
    }

    public function packages()
    {
        $model = new PackageModel();
        $data = $model->get();
        return $this->respond($data);
    }
    
    public function packages_old()
    {
        //return $this->respond($this->model->findAll());
        $res = $this->respond($this->model->get());
        $data = $this->model->get();
        if(is_null($data)) {
            return $this->fail(['error' => 'Project does not exist'], 404);
        }
 
        return $this->respond($data,200);
        //echo json_encode($res);
    }

    // ...
}

