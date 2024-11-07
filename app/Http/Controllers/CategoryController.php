<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $categories = category::all();
        return view('content.categories')->with(['categories' => $categories,'header' => 'categories']);
        // $products = product::all();
        // return view('content.products')->with(['products' => $products,'categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('content.admin.events.addCategory')->with(['header' => 'addCategory']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|min:3|max:20',
            'image_url' => 'required|mimes:jpg,jpeg,png,jfif,JPG,JPEG,PNG,JFIF,webp,WEBP',
        ],[
            'category_name.required' => 'anda wajib mengisi nama kategori',
            'category_name.min' => 'minimal 3 karakter untuk mengisi nama kategori',
            'category_name.max' => 'maximal 20 karakter untuk mengisi nama kategori',
            'image_url.mimes' => 'format file yang anda kirim salah',
            'image_url.required' => 'wajib menambahkan gambar',
        ]);

        $foto_file = $request->file('image_url');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = "/foto_categories/".date('ymdhis').'.'.$foto_ekstensi;
        $foto_file->move(public_path('/foto_categories'),$foto_nama);

        $data = [
            'category_name' => $request->input('category_name'),
            'image_url' => $foto_nama,
        ];

        category::create($data);

        return redirect('/admin')->with(['success' => 'anda berhasil memasukan category baru ']);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    $category = category::with('products')->find($id);
    $products = $category->products;

    return view('content.category')->with([
        'products' => $products,
        'header' => 'category',
        'category' => $category
    ]);
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
