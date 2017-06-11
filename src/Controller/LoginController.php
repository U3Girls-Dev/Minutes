<?php
namespace App\Controller;

use App\Controller\AppController;

class LoginController extends AppController
{
	public function __construct($request, $response) {
		parent::__construct($request, $response);
		//$this->viewBuilder()->setLayout('');
		$this->viewBuilder()->layout('common');
	}
    public function index()
    {
        $pageTitle = 'Login Page';
        $this->set('title', $pageTitle);
    }
}