<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Crud();
        $model->name=$request->post('name');
        $model->price=$request->post('price');
        $model->image=$request->file('image')->store('media');
        $model->description=$request->post('description');
        $model->save();
        return redirect("/index/show");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $posts = DB::table('cruds')->get();
        return view('/show',compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = DB::table('cruds')->where('id',$id)->first();
        return view('/edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('cruds')->where('id',$request->id)->update([
            'name'=>$request->name,
            'price'=>$request->price,
            'image'=>$request->file('image')->store('media'),
            'description'=>$request->description,
        ]);
        return redirect('index/show');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $model=Crud::find($id);
        $model->delete();
        return redirect('index/show');
    }
}
