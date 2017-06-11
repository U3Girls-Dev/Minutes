<?php
namespace App\Controller;

use App\Controller\AppController;

class DashboardController extends AppController
{
	public function __construct($request, $response) {
		parent::__construct($request, $response);
		$this->viewBuilder()->layout('common');
	}

	public function index()
	{
		$pageTitle = 'Dashboard';
		$this->set('title', $pageTitle);
	}
}