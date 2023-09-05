<?php

namespace App\Controllers\Api;

use App\Models\Kamar;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class Home extends ResourceController
{
  use ResponseTrait;

  public function show($id = null)
  {
    $model = new Kamar();
    $data = $model->find($id);

    return $this->respond($data);
  }

  public function save()
	{
		dd($this->request->getPost());
	}
}
