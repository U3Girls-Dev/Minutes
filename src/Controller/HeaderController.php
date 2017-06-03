<?php
namespace App\Controller;

use App\Controller\AppController;

class HeaderController extends AppController {

	public function index()
	{
		$ret = array();
		$ret = array(
			'title' => 'HEADER2',
		);


		$this->set('data', $ret);

	}
}