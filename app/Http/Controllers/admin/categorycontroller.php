<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;

class categorycontroller extends Controller
{
    //
    public function index()
    {
        $categories= category::paginate();
        return view('admin.pages.category.index', compact('categories'));
    }
    // public function create()
    // {
    //     $categories = Category::select('id', 'name')
    //         ->get();
    //     return view('admin.pages.product.create', compact('categories'));
    // }

    // public function store(StoreProduct $request)
    // {
    //     $data = $request->validated();
    //     $data['price_after_discount'] = $data['price'] - ($data['price'] * $data['discount'] / 100);
    //     $data['image'] = UploadFile::uploadFile('image','products');
    //     $data['code'] = Str::random();
    //     Product::create($data);
    //     // toastr()->success('Data has been saved successfully!');
    //     return back();
    // }
}
