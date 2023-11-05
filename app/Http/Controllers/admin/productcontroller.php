<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Str;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;
use App\Http\Requests\Admin\Product\StoreProduct;
use App\Http\Requests\Admin\Product\UpdateProduct;
use App\Traits\UploadFile;
use Illuminate\Support\Facades\Redirect;

class productcontroller extends Controller
{
    //
    use UploadFile;
    public function index()
    {
        $products = Product::paginate();
        return view('admin.pages.product.index', compact('products'));
    }
    public function create()
    {
        $categories = Category::select('id', 'name')
            ->get();
        return view('admin.pages.product.create', compact('categories'));
    }

    public function store(StoreProduct $request)
    {
        $data = $request->validated();
        $data['price_after_discount'] = $data['price'] - ($data['price'] * $data['discount'] / 100);
        $data['image'] = UploadFile::uploadFile('image','products');
        $data['code'] = Str::random();
        Product::create($data);
        // toastr()->success('Data has been saved successfully!');
        return back();
    }

    // public function edit($id)
    // {
    //     $product = Product::findOrFail($id);
    //     $categories = Category::select('id', 'name')
    //         ->get();
    //     return view('admin.pages.product.edit', compact('categories', 'product'));
    // }

    // public function update(UpdateProduct $request, $id)
    // {
    //     $data = $request->validated();
    //     $product = Product::findOrFail($id);
    //     $data['price_after_discount'] = $data['price'] - ($data['price'] * $data['discount'] / 100);
    //     $data['code'] = rand(1000,2000);
    //     if (isset($data['image'])) {
    //         if (file_exists(public_path('products/' . $product->image))) {
    //             unlink(public_path('products/' . $product->image));
    //         }
    //         $ext = request()->file('image')->getClientOriginalExtension();
    //         $data['image'] = time() . rand(10000, 2000) . ".$ext";
    //         request()->file('image')->move(public_path('products'), $data['image']);
    //     }
    //     $product->update($data);
    //     toastr()->success('Data has been updated successfully!');
    //     return back();
    // }

    // public function destroy($id)
    // {
    //     $product = Product::findOrFail($id);
    //     $product->delete();
    //     toastr()->success('Data has been deleted successfully!');
    //     return back();
    // }
}
