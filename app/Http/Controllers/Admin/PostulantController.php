<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostulantController extends Controller
{
    public function index()
    {
        return view('admin.postulants.index');
    }
}
