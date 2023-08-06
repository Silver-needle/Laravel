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

    public function downloadNews($id)
    {
        $uploads = DB::table('news')->where('id', $id)->first();
        $filePath = public_path("images/{$uploads->upload}");
        return \Response::download($filePath);
    }

    public function import()
    {
        Excel::import(new ImportNews, request()->file('file'));

        return back();
    }
}
