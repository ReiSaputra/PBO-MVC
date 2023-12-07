<?php

namespace App\Controllers;

use App\Core\Controller;

class Charities extends Controller
{
     public object $model;

     public function __construct()
     {
          parent::cekLogin();

          $this->model = new \App\Models\Charity();
     }

     public function index()
     {
          $data['optusers'] = $this->model->show();
          $this->dashboard('charities/index', $data);
     }

     public function input()
     {
          $data['optusers'] = $this->model->optUsers();
          $this->dashboard('charities/input', $data);
     }

     public function save()
     {
          $this->model->save();
          header('location:' . URL . '/charities');
     }

     public function edit($id)
     {
          $data['optusers'] = $this->model->edit($id);
          $this->dashboard('charities/edit', $data);
     }

     public function update()
     {
          $this->model->update();
          header('location:' . URL . '/charities');
     }
     public function delete($id)
     {
          $this->model->delete($id);
          header('location:' . URL . '/charities');
     }
}

?>