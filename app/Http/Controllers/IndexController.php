<?php

namespace App\Http\Controllers;

use App\Models\Index;

class IndexController extends Controller
{

    protected $model;

    public function __construct()
    {
        $this->model = new index();
    }

    // Render View
    public function index() 
    {
        return view('pages.index');
    }

    // Get content from database
    public function content()
    {
        $content = $this->model->get();
        return $content;
    }
}
