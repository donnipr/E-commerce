<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorys;
use Pagination\Paginator;

class CategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Categorys::orderBy('created_at','DESC')->paginate(5);
        return view('adminpanel.categorys.index', compact('data'));    
        //return ($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpanel.categorys.form');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Categorys();
        $data->name = $request->name;
        $data->status = $request->status;
        $data->save();
        flashMe()->success();
        return redirect()->route('categorys.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Categorys::findOrFail($id);
        return view('adminpanel.categorys.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Categorys::findOrFail($id);
        $data->name =  $request->name;
        $data->status = $request->status;
        $data->save();
        flashMe()->info();
        return redirect()->route('categorys.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Categorys::findOrFail($id);
        $data->delete();
        flashMe()->error();
        return redirect()->route('categorys.index');
    }

    public function delete($id)
    {
        $data = Categorys::findOrFail($id);
        $data->delete();
        flashMe()->error();
        return redirect()->route('categorys.index');
    }

    public function search(Request $request){
        $cari = $request->get('search');
        $data = Categorys::where('name','LIKE','%'.$cari.'%')->paginate(5);
        return view('adminpanel.categorys.index', compact('data'));
    }
}
