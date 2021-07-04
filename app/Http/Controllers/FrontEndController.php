<?php

namespace App\Http\Controllers;
use App\Models\Crud;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FrontEndController extends Controller
{
    public function product()
    {
        $products = DB::table('cruds')->get();
        return view('welcome',compact('products'));
    }
    public function show($id)
    {
        $post = DB::table('cruds')->where('id',$id)->first();
        return view('/detail',compact('post'));
    }
}
