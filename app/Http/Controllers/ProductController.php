<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
// use \DB;
use \Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function index()
    {

        // @first get data from database table from the  model
        // @return this data in variable        

        $product = DB::table('products')->latest()->paginate(3);
        return view('product.index', compact('product'));
    }
    public function create()
    {

        // @first get data from database table from the  model
        // @return this data in variable        
        return view('product.create');
    }
    // will recive  request to save  data
    public function store(Request $request)
    {
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_code'] = $request->product_code;
        $data['details'] = $request->details;
        $image = $request->file('logo');
        if ($image) {
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/media/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            $data['logo'] = $image_url;
            $product = DB::table('products')->insert($data);
            return redirect()->route('product.index')->with('success', 'Product created Successfuly');
        }
        // @first get data from database table from the  model
        // @return this data in variable        
        // return view('product.create');
    }


    public function Edit($id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        return view('product.edit', compact('product'));
    }
    public function update(Request $request, $id)
    {
        $oldlogo = $request->old_logo;
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_code'] = $request->product_code;
        $data['details'] = $request->details;
        $image = $request->file('logo');
        if ($image) {
            unlink($oldlogo);
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/media/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            $data['logo'] = $image_url;
            $product = DB::table('products')->where('id', $id)->update($data);
            return redirect()->route('product.index')->with('success', 'Product updated Successfuly');
        }
    }
    public function delete($id)
    {
        $data = DB::table('products')->where('id', $id)->first();
        // $image = $data->logo;
        // unlink($image);
        $product = DB::table('products')->where('id', $id)->delete();

        return redirect()->route('product.index')->with('success', 'Product updated Successfuly');
    }
    public function show($id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        return view('product.show', compact('product'));
    }
}
