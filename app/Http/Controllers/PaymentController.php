<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Confirms;
use Pagination\Paginator;
use Image;
use Storage;

class PaymentController extends Controller
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
        $data = Confirms::where('status','0')->paginate(5);
        return view('adminpanel.payment.confirmasi', compact('data'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Confirms::find($id);
        return view('adminpanel.payment.editconf', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $data = Confirms::findOrFail($id);
        $data->status = $request->status;
        $data->save();
        flashMe()->info();
        return redirect()->route('payment.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function konf()
    {
        $data = Confirms::where('status','1')->paginate(5);
        return view('adminpanel.payment.transaksi', compact('data'));
    }

    public function detailkonf($id)
    {
        $data = Confirms::find($id);
        return view('adminpanel.payment.detailconf', compact('data'));
    }
}
