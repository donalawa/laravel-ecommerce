@extends('layouts.app')

@section('content')

    <!-- start product Area -->
    
	<section class="">
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Your Products</h1>
						</div>
					</div>
				</div>
				<div class="row">
                    <!-- single product -->
                @if(count($products) > 0) 
                    @foreach($products as $product)
                        <div class="col-lg-3 col-md-6">
                            <div class="single-product">
                                <img class="img-fluid" src="{{$product->image_url}}" alt="">
                                <div class="product-details">
                                <h6><a href="/products/{{$product->id}}">{{$product->title}}</a></h6>
                                    <div class="price">
                                        <h6>${{$product->price}}</h6>
                                    </div>
                                    <div class="prd-bottom">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-info">
                                                    Edit
                                                </a>
                                            </div>
                                            <div class="col-md-6">
                                                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" value="Delete" class="btn btn-danger">
                                                </form>
                                              
                                            </div>
                                        </div>
                                       
                                       
                
                                    </div>
                                </div>
                            </div>
                        </div>
					@endforeach
                @else
                    <h1>You Have No Products Available</h1>
                @endif
                    {{-- End Of Single Product --}}
				</div>
			</div>
		</div>
	</section>
	<!-- end product Area -->

    @include('inc.footer')
@endsection
