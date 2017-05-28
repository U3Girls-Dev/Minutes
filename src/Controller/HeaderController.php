<?php
namespace App\Controller;

use App\Controller\AppController;

class HeaderController extends AppController {

	public function view()
	{
		$ret = array();
		$ret = array(
			'name' => 'maeda',
			'gender' => 'female',
		);

		$this->set('data', $ret);
	}
}