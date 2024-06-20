<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('desktop.page.dashboard', [
            'title' => 'Tokopedia'
        ]);
    }

    public function category($category)
    {
        return view('desktop.page.category', [
            'title' => 'Tokopedia | ' . $category
        ]); 
    }
}
