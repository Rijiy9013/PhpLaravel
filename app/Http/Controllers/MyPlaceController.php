<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyPlaceController extends Controller
{
    public function index() {
        return 'my_page';
    }
    public function hobby() {
        return 'my_hobby';
    }
    public function welcome() {
        return 'welcome';
    }
}
