<?php
namespace App\Controller;

use App\Controller\AppController;

class LoginController extends AppController
{
    public function index()
    {
        $ret = 'Test';
        $this->set('data', $ret);
    }
}