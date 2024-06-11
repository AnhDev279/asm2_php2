<?php

namespace Monkey\Oop\Controllers\Admin;

use Monkey\Oop\Commons\Controller;

use Monkey\Oop\Models\Product;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $this->renderViewAdmin(__FUNCTION__);
    }
}
