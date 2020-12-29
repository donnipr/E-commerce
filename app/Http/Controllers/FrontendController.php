<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Products;
use App\Categorys;
use Pagination\Paginator;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Products::where('status','publish')->orderBy('created_at','DESC')->paginate(9);
        //$data = Products::all();
        return view('welcome', compact('data'));
    }

    public function show($slug)
    {
        $amrs = Categorys::all();
        $keys = Products::where('status','publish')->orderBy('created_at','DESC')->paginate(8);
        $data = Products::where('slug_title', $slug)->first();
        return view('product', compact('data','keys','amrs'));
    }

    public function listbottom()
    {
        $datas = Products::all();
        return view('product', compact('datas'));
    }

    public function allproducts()
    {
        $amrs = Categorys::all();
        $data = Products::where('status','publish')->orderBy('created_at','DESC')->paginate(9);
        return view('allproducts', compact('data','amrs'));
    }

    public function tshirt()
    {
        $amrs = Categorys::all();
        $data = Products::where('categorys_id','7')->orderBy('created_at','DESC')->paginate(9);
        return view('shirt', compact('data','amrs'));
        //return($data);
    }

    public function jackets()
    {
        $amrs = Categorys::all();
        $data = Products::where('categorys_id','6')->orderBy('created_at','DESC')->paginate(9);
        return view('shirt', compact('data','amrs'));
        //return($data);
    }

    public function bags()
    {
        $amrs = Categorys::all();
        $data = Products::where('categorys_id','5')->orderBy('created_at','DESC')->paginate(9);
        return view('shirt', compact('data','amrs'));
        //return($data);
    }
}
