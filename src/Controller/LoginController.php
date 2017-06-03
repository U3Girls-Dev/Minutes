<?php
namespace App\Controller;

use App\Controller\AppController;

class LoginController extends AppController
{
    public function index()
    {
    	$ret = array(
    			'title' => 'HEADER',
    			'contents' =>'LOGIN',
    			'footer' => 'FOOTER',
    	);
        $this->set('data', $ret);

        $this->render(null, 'layout');
    }
}