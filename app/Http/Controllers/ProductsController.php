<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Products;
use App\Categorys;
use Pagination\Paginator;
use Image;
use Storage;

class ProductsController extends Controller
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
        $products = Products::orderBy('created_at','DESC')->paginate(10);
        return view('adminpanel.product.index', compact('products'));   
        //return ($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys = Categorys::all();
        return view('adminpanel.product.form', compact('categorys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request, array(
            'title'     => 'required',
            'categorys_id' => 'required',
            'desc'   => 'required',
            'price' => 'required',
            'status' => 'required',
            'kode' => 'required',
            'featured_image' => 'sometimes|image'
            )); 

        $products = new Products();
        $products->title = $request->title;
        $products->slug_title = Str::slug( $request->title);
        $products->categorys_id = $request->categorys_id;
        $products->desc = $request->desc;
        $products->price = $request->price;
        $products->status = $request->status;
        $products->kode = $request->kode;

       /*if ($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('image/' . $filename);
            Image::make($image)->resize(320, 210)->save($location);

            $products->image = $filename;
        } */
            if($request->hasFile('featured_image')){
            $photo = time() . '.' . $request->file('featured_image')->getClientOriginalExtension();
            $destination = base_path().'/public/image';
            $request->file('featured_image')->move($destination,$photo);
        
        $products['image'] = $photo;
        }

        $products->save();
        flashMe()->success();
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $products = Products::where('slug_title', $slug)->first();
        return view('adminpanel.product.detail', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Products::findOrFail($id);
        $categorys = Categorys::pluck('name', 'id')->all();
        return view('adminpanel.product.edit', compact('data','categorys'));
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
        $products = Products::findOrFail($id);

        $this->validate($request, array(
            'title'     => 'required',
            'categorys_id' => 'required',
            'desc'   => 'required',
            'price' => 'required',
            'status' => 'required',
            'kode' => 'required',
            'featured_image' => 'image'
            ));

        $products = Products::findOrFail($id);
        $products->title = $request->input('title');
        $products->slug_title = Str::slug( $request->title);
        $products->categorys_id = $request->input('categorys_id');
        $products->desc = $request->input('desc');
        $products->price = $request->input('price');
        $products->status = $request->input('status');
        $products->kode = $request->input('kode');

       /* if ($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('image/' . $filename);
            Image::make($image)->resize(800, 400)->save($location);
            $oldFilename = $post->image;

            $products->image = $filename;

            Storage::delete($oldFilename);
        }*/
        if($request->hasFile('featured_image')){
        $photo = time() . '.' . $request->file('featured_image')->getClientOriginalExtension();
        $destination = base_path().'/public/image';
        $request->file('featured_image')->move($destination,$photo);
        $oldFilename = $products->image;
        $products['image'] = $photo;
        Storage::delete($oldFilename);
        }


        $products->save();
        flashMe()->info();
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Products::findOrFail($id);
        Storage::delete($products->image);
        $products->delete();
        flashMe()->error();
        return redirect()->route('product.index');
    }

    public function search(Request $request){
        $cari = $request->get('search');
        $data = Products::where('title','LIKE','%'.$cari.'%')->paginate(5);
        return view('adminpanel.product.index', compact('data'));
    }

    public function delete($id)
    {
        $products = Products::findOrFail($id);
        Storage::delete($products->image);
        $products->delete();
        flashMe()->error();
        return redirect()->route('product.index');
    }
}
