<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestDownload as Request;
use Illuminate\Support\Facades\Validator;

class DownloadController extends Controller
{   
    public function index()
    {
        return view('homepage');
    }
    
    public function store(Request $request)
    {   
        return $request;
    }

}


