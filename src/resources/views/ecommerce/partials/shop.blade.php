@extends('ecommerce::ecommerce/layouts.layout')

@section('title', 'Products')

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <a href="/">Home</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>>Shop</span>
        </div>
    </div> <!-- end breadcrumbs -->
    <main role="main">        
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="sidebar col-md-2" >
                        <h3>By Category</h3>
                        <ul>
                            <li><a href="#">Laptops</a></li>
                            <li><a href="#">Desktops</a></li>
                            <li><a href="#">Mobile Phones</a></li>
                            <li><a href="#">Tablets</a></li>
                            <li><a href="#">TVs</a></li>
                            <li><a href="#">Digital Cameras</a></li>
                            <li><a href="#">Appliances</a></li>
                        </ul>
            
                        <h3>By Price</h3>
                        <ul>
                            <li><a href="#">$0 - $700</a></li>
                            <li><a href="#">$700 - $2500</a></li>
                            <li><a href="#">$2500+</a></li>
                        </ul>
                    </div> <!-- end sidebar --> 
                    @foreach ($products as $product)
                        <div class="col-md-3">
                            <div class="card mb-3 shadow-sm">
                            <a href="{{ route('shop.show', $product->slug) }}"><img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22348%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20348%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17327a57483%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A17pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17327a57483%22%3E%3Crect%20width%3D%22348%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22116.71875%22%20y%3D%22120.3%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap"></a>
                            <div class="card-body">
                                <p class="card-text">{{ $product->name }}</p>
                                <p class="card-text">{{ $product->description }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ route('shop.show', $product->slug) }}" class="btn btn-sm btn-outline-secondary">View</a>
                                </div>
                                <small class="text-muted">{{ $product->presentPrice() }} €</small>
                                </div>
                            </div>
                            </div>
                        </div>
                    @endforeach                                
                </div>
            </div>
        </div>
    </main>
@endsection
