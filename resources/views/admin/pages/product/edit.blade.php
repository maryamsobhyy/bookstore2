@extends('admin.layout.app')
@section('title', 'Update Product')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Update Product</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control"
                        id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Author</label>
                    <input type="text" name="author" value="{{ $product->author }}" class="form-control"
                        id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <textarea name="description" class="form-control" id="" cols="7" rows="7">{{ $product->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="number" name="price" value="{{ $product->price }}" class="form-control"
                        id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Discount</label>
                    <input type="number" name="discount" value="{{ $product->discount }}" class="form-control"
                        id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">No. Of Page</label>
                    <input type="number" name="number_of_pages" value="{{ $product->number_of_pages }}"
                        class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Stock</label>
                    <input type="number" name="stock" value="{{ $product->stock }}" class="form-control"
                        id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Category</label>
                    <select name="category_id" class="form-control">
                        <option disabled selected>Choose Category</option>
                        @foreach ($categories as $category)
                            <option {{ $product->category_id == $category->id ? 'selected' : '' }}
                                value="{{ $category->id }}">
                                {{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                    <select name="status" class="form-control">
                        <option disabled selected>Choose Status</option>
                        <option {{ $product->status == true ? 'selected' : '' }} value="1">متاح</option>
                        <option {{ $product->status == false ? 'selected' : '' }} value="0">غير متاح</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Old Image</label>
                    <img width="150px" src="{{ asset('products/' . $product->image) }}" alt="">
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection
