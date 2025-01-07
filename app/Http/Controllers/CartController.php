<?php

namespace App\Http\Controllers;

use App\Models\product;
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
        return view('content.cart')->with(['header'=>'cart']);
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
        // $quantity = $request->input('quantity');
        // $user = Auth::user();
        // $user->products()->updateExistingPivot($productId, ['quantity' => $quantity]);
        // return back()->with('success', 'Quantity updated successfully.');
    }

    // Remove Product
    public function remove($productId)
    {
        // $user = Auth::user();
        // $user->products()->detach($productId);
        // return back()->with('success', 'Product removed from cart.');
    }

    // Checkout All
    public function checkout()
    {
        // $user = Auth::user();
        // $user->products()->detach();
        // return back()->with('success', 'Checkout successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
product_user::where('product_id', $id)
             ->where('user_id', Auth::user()->id)
             ->delete();

        return redirect('/cart');

    }

    public function addQty($id){
        $data = product_user::find($id);
        $qty = $data->qty;

        $data->qty = $qty + 1;
        $data->save();
        return redirect('/cart');
    }

    public function minQty($id){
        $data = product_user::find($id);
        $qty = $data->qty;
        if($qty > 1){
            $data->qty = $qty - 1;
            $data->save();
        }
        return redirect('/cart');
    }


}
