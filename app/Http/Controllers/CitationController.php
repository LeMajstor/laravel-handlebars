<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Index;
use App\Models\Citation;

class CitationController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->model = new Citation();
    }

    public function index()
    {
        return view('pages.citations');
    }

    public function content()
    {
        $index = Index::get()->first();

        $content = $index->with(['citations' => function($query) {
            $query->get();
        }])->get()->first(); 

        return $content;
        
    }
}
