<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\product_category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = product::all();
        return view('content.products')->with(['header'=> 'products','products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('content.admin.events.addProduct')->with(['header' => 'addProduct','categories' => category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|min:3|max:35',
            'description' => 'required|min:5',
            'price' => 'required|numeric|min:10000|max:10000000',
            'image_url' => 'required|mimes:jpg,jpeg,png,jfif,JPG,JPEG,PNG,JFIF,webp,WEBP',
            'category_id' => 'required'
        ],[
            'product_name.required' => 'nama product yang akan di inputkan wajib di isi',
            'product_name.min' => 'nama product minimal 3 huruf',
            'product_name.max' => 'nama product maximal 35 huruf',
            'description.required' => 'wajib mengisikan deskripsi',
            'description.min' => 'deskripsi minimal 5 karakter',
            'price.required' => 'harga wajib di isi',
            'category_id.required' => 'category wajib di isi',
            'price.numeric' => 'harga wajib ber format number',
            'price.min' => 'harga product minimal 10000',
            'price.max' => 'harga product maximal 10000000',
            'image_url.mimes' => 'format file yang anda kirim salah',
            'image_url.required' => 'wajib menambahkan gambar',
        ]);

        $foto_file = $request->file('image_url');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = "/foto/".date('ymdhis').'.'.$foto_ekstensi;
        $foto_file->move(public_path('/foto'),$foto_nama);

        $data = [
            'product_name' => $request->input('product_name'),
            'price' => $request->input('price'),
            'image_url' => $foto_nama,
            'description' => $request->input('description')
        ];

        $product = product::create($data);
        product_category::create([
            'product_id' => $product->id,
            'category_id' => $request->category_id
        ]);

        return redirect('/admin')->with(['success' => 'anda berhasil memasukan product baru ']);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $product = Product::find($id);
        $product = Product::with(['comments' => function ($query) {
            $query->orderBy('created_at', 'desc');
        }, 'comments.user'])->findOrFail($id);
        return view('content.product')->with(['product' => $product,'header'=> 'product']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
