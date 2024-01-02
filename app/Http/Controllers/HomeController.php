<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Carbon\Carbon;
use App\dokument;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('dashboard');
    }
    public function apr()
    {
        $data=dokument::all();
        return view('apr',compact('data')); 
    }
    public function upload_apr()
    {
        return view('upload'); 
    }
    public function post_upload_apr(request $request)
    {
        $file = request()->file('file');
        $filename = $file->getClientOriginalName();
        $file->move(public_path('apr'), $filename);
        $data = new dokument;
        $data->supplier = request('supplier');
        $data->nama = request('nama');
        $data->file = $filename;
        $data->save();
        return redirect('/apr'); 
    }
}
