<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\CustomerModel;
use App\Models\LocationModel;

class CustomerAPI extends BaseController
{
    public function index()
    {
        $customerModel = new CustomerModel();
        return $this->response->setJSON(
            $customerModel->findAll()
        );
    }

    public function show($id = null)
    {
        $customerModel = new CustomerModel();
        $locationModel = new LocationModel();

        $customer = $customerModel->find($id);
        $location = $locationModel
            ->where('customer_id', $id)
            ->first();

        return $this->response->setJSON([
            'customer' => $customer,
            'location' => $location
        ]);
    }
}
