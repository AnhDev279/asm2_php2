<?php

namespace Monkey\Oop\Controllers\Client;

use Monkey\Oop\Commons\Controller;

class HomeController extends Controller
{
    public function index() {
        $name = 'Nguyễn Bá Kỳ';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}