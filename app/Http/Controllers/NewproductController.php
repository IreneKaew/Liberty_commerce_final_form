<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewproductController extends Controller
{
    public function store(Request $request)
    {


        $validated = $request->validate([

            'title' => 'required',
            'image' => 'required',
            'titlecircuit' => 'required',
            'imagecircuit' => 'required',
            'descrip' => 'required',
            'price' => 'required|min:2',
            'stock' => 'required|min:2',
        ]);
        $filename = $request->file('image')->getClientOriginalName();
        $filename = date("Y-m-dH:i:s") . $filename;
        $request->file('image')->storeAs('public/image', $filename);
        $validated['image'] = $filename;
        $filename = $request->file('imagecircuit')->getClientOriginalName();
        $filename = date("Y-m-dH:i:s") . $filename;
        $request->file('imagecircuit')->storeAs('public/image', $filename);
        $validated['imagecircuit'] = $filename;

        Product::create($validated);
        return redirect()->intended('catalog');
    }
    // "where" help modify information in the page where ypu are
    // ->update(['title' = 'title' -> is from views
    // if(!is_null = when there is nothing then send nothing

    public function stock(Request $request)
    {
        if (!is_null($request->description)) {
            DB::table('products')
                ->where('id', $request->product_id)
                ->update(['descrip' => $request->description]);
        }

        if (!is_null($request->title)) {
            DB::table('products')
                ->where('id', $request->product_id)
                ->update(['title' => $request->title]);
        }

        if (!is_null($request->title_circuit)) {
            DB::table('products')
                ->where('id', $request->product_id)
                ->update(['titlecircuit' => $request->title_circuit]);
        }

        DB::table('products')->where('id', $request->product_id)->increment('stock', $request->stock);



        return back();
    }
}
