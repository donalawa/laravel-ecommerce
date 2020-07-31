@extends('layouts.app')

@section('content')
<section class="features-area">
    <div class="container">
        <div class="row px-5 features-inner">
            <!-- single features -->
            <form action="{{ route('products.store') }}" enctype="multipart-data" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Product Name</label>
                    <input type="text" name="product_name" placeholder="Product Name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="title">Product image Url</label>
                    <input type="text" name="product_image_url" placeholder="image url" class="form-control">
                </div>
                <div class="form-group">
                    <label for="title">Product Price</label>
                    <input type="text" name="product_price" placeholder="Price" class="form-control">
                </div>
                <div class="form-group">
                    <label for="title">Product Description</label>
                    <br>
                    <textarea name="product_description" id="" placeholder="Product Description" cols="60" rows="8"></textarea>
                </div>
                {{-- <a href="/products" class="primary-btn">Add Product</a> --}}
                <input type="submit" class="primary-btn" value="Add Product">
            </form>
        </div>
    </div>
</section>

@include('inc.footer')
@endsection