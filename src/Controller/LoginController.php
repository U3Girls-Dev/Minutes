<?php
namespace App\Controller;

use App\Controller\AppController;

class LoginController extends AppController
{
    public function index()
    {
        $this->autoRender = false;
        echo "<html><head></head><body>";
        echo "<h1>LoginTest</h1>";
        echo "<p>ログイン用ページになる予定</p>";
        echo "<p>ルーティング済み、テンプレートのレンダリングはまだ</p>";
        echo "</body></html>";
    }
}