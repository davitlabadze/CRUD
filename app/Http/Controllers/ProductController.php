<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::orderBy('id','DESC');

        if ($request->id) {
            $products->where('id',$request->id);
        }

        if ($request->name) {
            $products->where('name','LIKE', '%'. $request->name . '%');
        }

        if ($request->category) {
            $products->where('category', $request->category);
        }

        if ($request->price) {
            $products->where('price', '>', $request->price);
        }

        if ($request->sale) {
            $products->where('sale', '=', $request->sale);
        }


        if ($request->stock) {
            $products->where('stock','<', $request->stock);
        }


        $products = $products->get();
        return view('products-page')->with('products',$products );
    }

   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Product::create([
            'name'=> $request->name,
            'category'=> $request->category,
            'price'=> $request->price,
            'sale'=> $request->sale,
            'stock'=> $request->stock,
        ]);
       
        return redirect()->route('products.index'); 
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product_to_edit = Product::where('id', $id)->firstOrfail();
        return view('edit-form')->with('product', $product_to_edit);
        return redirect()->route('products.index'); 
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
        Product::where('id', $id)->update([
            'name'      => $request->name,
            'price'     => $request->price,
            'sale'      => $request->sale,
            'stock'      => $request->stock,
         ]);

        return redirect()->route('products.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::where('id', $id)->delete();
        return redirect()->route('products.index');
    }
}
