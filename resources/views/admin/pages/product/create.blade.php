@extends('admin.layout.app')
@section('title', 'Create Product')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Create Product</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                        id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Author</label>
                    <input type="text" name="author" value="{{ old('author') }}" class="form-control"
                        id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <textarea name="description" class="form-control" id="" cols="7" rows="7">{{ old('description') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="number" name="price" value="{{ old('price') }}" class="form-control"
                        id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Discount</label>
                    <input type="number" name="discount" value="{{ old('discount') }}" class="form-control"
                        id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">No. Of Page</label>
                    <input type="number" name="number_of_pages" value="{{ old('number_of_pages') }}" class="form-control"
                        id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Stock</label>
                    <input type="number" name="stock" value="{{ old('stock') }}" class="form-control"
                        id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Category</label>
                    <select name="category_id" class="form-control">
                        <option disabled selected>Choose Category</option>
                        @foreach ($categories as $category)
                            <option {{ old('category_id') == $category->id ? 'selected' : '' }} value="{{ $category->id }}">
                                {{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                    <select name="status" class="form-control">
                        <option disabled selected>Choose Status</option>
                        <option {{ old('status') == true ? 'selected' : '' }} value="1">متاح</option>
                        <option {{ old('status') == false ? 'selected' : '' }} value="0">غير متاح</option>
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
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
