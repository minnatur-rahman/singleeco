<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function index()
    {
        return view('admin.allsubcategory');
    }

    public function addsubcategory()
    {
        return view('admin.addsubcategory');
    }
}
