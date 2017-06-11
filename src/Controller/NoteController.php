<?php
namespace App\Controller;

use App\Controller\AppController;

class NoteController extends AppController
{
	public function __construct($request, $response) {
		parent::__construct($request, $response);
		//$this->viewBuilder()->layout('common');
	}

	public function index()
	{
		$noteContent = 'text text text';

		$this->element('Note/index', array('content'=>$noteContent));
		//$this->set('content', $noteContent);
	}
}