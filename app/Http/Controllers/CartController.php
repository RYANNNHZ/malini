<?php

namespace App\Http\Controllers;

use App\Models\product_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('content.cart')->with(["header" => 'cart']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        product_user::create([
            'product_id' => $request->id,
            'user_id' => Auth::user()->id,
        ]);

        return redirect("/product/$request->id");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request, $productId)
    {
        $quantity = $request->input('quantity');
        $user = Auth::user();
        $user->products()->updateExistingPivot($productId, ['quantity' => $quantity]);
        return back()->with('success', 'Quantity updated successfully.');
    }

    // Remove Product
    public function remove($productId)
    {
        $user = Auth::user();
        $user->products()->detach($productId);
        return back()->with('success', 'Product removed from cart.');
    }

    // Checkout All
    public function checkout()
    {
        $user = Auth::user();
        // Simpan logika checkout sesuai kebutuhan
        $user->products()->detach(); // Kosongkan cart setelah checkout
        return back()->with('success', 'Checkout successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
