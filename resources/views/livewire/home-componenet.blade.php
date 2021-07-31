{{-- <main id="main">
    <div class="container">

        <!--MAIN SLIDE-->
        <div class="wrap-main-slide">
            <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
                @foreach ($sliders as $slide)
                    <div class="item-slide">
                        <img src="{{asset('assets/images/sliders')}}/{{$slide->image}}" alt="" class="img-slide">
                        <div class="slide-info slide-1">
                            <h2 class="f-title"><b>{{ $slide->title }}</b></h2>
                            <span class="subtitle">{{ $slide->subtitle }}</span>
                            <p class="sale-info">Only price: <span class="price">${{ $slide->price }}</span></p>
                            <a href="{{ $slide->link }}" class="btn-link">Shop Now</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!--BANNER-->
        <div class="wrap-banner style-twin-default">
            <div class="banner-item">
                <a href="#" class="link-banner banner-effect-1">
                    <figure><img src="{{asset('assets/images/home-1-banner-1.jpg')}}" alt="" width="580" height="190"></figure>
                </a>
            </div>
            <div class="banner-item">
                <a href="#" class="link-banner banner-effect-1">
                    <figure><img src="{{asset('assets/images/home-1-banner-2.jpg')}}" alt="" width="580" height="190"></figure>
                </a>
            </div>
        </div>

        <!--On Sale-->
        @if ($sale_products->count() > 0 && $sale_date->status == 1 && $sale_date->sale_date > Carbon\Carbon::now())
            <div class="wrap-show-advance-info-box style-1 has-countdown">
                <h3 class="title-box">On Sale</h3>
                <div class="wrap-countdown mercado-countdown" data-expire="{{ Carbon\Carbon::parse($sale_date->sale_date)->format('Y/m/d h:m:s') }}"></div>
                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>
                    @foreach ($sale_products as $sale_product)
                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="{{route('product.details',['slug' => $sale_product->slug])}}" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{asset('assets/images/products')}}/{{$sale_product->image}}" width="800" height="800" alt="{{$sale_product->name}}"></figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item sale-label">sale</span>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>{{$sale_product->name}}</span></a>
                                <div class="wrap-price"><ins><p class="product-price">${{$sale_product->sale_price}}</p></ins> <del><p class="product-price">${{$sale_product->regular_price}}</p></del></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        <!--Latest Products-->
        <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">Latest Products</h3>
            <div class="wrap-top-banner">
                <a href="#" class="link-banner banner-effect-2">
                    <figure><img src="{{asset('assets/images/digital-electronic-banner.jpg')}}" width="1170" height="240" alt=""></figure>
                </a>
            </div>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">
                    <div class="tab-contents">
                        <div class="tab-content-item active" id="digital_1a">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                                @foreach ($latest_products as $latest_product)
                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="{{route('product.details',['slug' => $latest_product->slug])}}" title="{{$latest_product->name}}">
                                                <figure><img src="{{asset('assets/images/products')}}/{{$latest_product->image}}" width="800" height="800" alt="{{$latest_product->name}}"></figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item new-label">new</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="{{route('product.details',['slug' => $latest_product->slug])}}" class="product-name"><span>{{$latest_product->name}}</span></a>
                                            <div class="wrap-price"><span class="product-price">${{$latest_product->regular_price}}</span></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Product Categories-->
        <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">Product Categories</h3>
            <div class="wrap-top-banner">
                <a href="#" class="link-banner banner-effect-2">
                    <figure><img src="{{asset('assets/images/fashion-accesories-banner.jpg')}}" width="1170" height="240" alt=""></figure>
                </a>
            </div>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">
                    <div class="tab-control">
                        @foreach ($categories as $key=>$category)
                            <a href="#category_{{$category->id}}" class="tab-control-item {{$key == 0 ? 'active' : ''}}">{{$category->name}}</a>
                        @endforeach
                    </div>
                    <div class="tab-contents">
                        @foreach ($categories as $key=>$category)
                            <div class="tab-content-item {{$key == 0 ? 'active' : ''}}" id="category_{{$category->id}}">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                                    @php
                                        $c_products = DB::table('products')->where('category_id', $category->id)->get()->take($no_of_products);
                                    @endphp
                                        @foreach ($c_products as $c_product)
                                            <div class="product product-style-2 equal-elem ">
                                                <div class="product-thumnail">
                                                    <a href="{{route('product.details',['slug' => $c_product->slug])}}" title="{{ $c_product->name }}">
                                                        <figure><img src="{{asset('assets/images/products')}}/{{$c_product->image}}" width="800" height="800" alt="{{$c_product->name}}"></figure>
                                                    </a>
                                                    <div class="group-flash">
                                                        <span class="flash-item new-label">new</span>
                                                    </div>
                                                    <div class="wrap-btn">
                                                        <a href="#" class="function-link">quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <a href="#" class="product-name"><span>{{$c_product->name}}</span></a>
                                                    <div class="wrap-price"><span class="product-price">${{$c_product->regular_price}}</span></div>
                                                </div>
                                            </div>
                                        @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>

</main> --}}


{{-- @foreach ($sliders as $slide)
<div class="item-slide">
    <img src="{{asset('assets/images/sliders')}}/{{$slide->image}}" alt="" class="img-slide">
    <div class="slide-info slide-1">
        <h2 class="f-title"><b>{{ $slide->title }}</b></h2>
        <span class="subtitle">{{ $slide->subtitle }}</span>
        <p class="sale-info">Only price: <span class="price">${{ $slide->price }}</span></p>
        <a href="{{ $slide->link }}" class="btn-link">Shop Now</a>
    </div>
</div>
@endforeach --}}


{{-- start home page --}}
<body >
    <div class="container" style="background-color: #f6f6f6!important;">

                <div class="slider" style="border 1px;">
                    <div class="slideshow-container p-2"  style="border: 2px solid black;">
                        <!-- Full-width images with number and caption text -->
                        @foreach ($sliders as $slide)
                            <div class="mySlides fade">
                            <div class="numbertext">2 / 3</div>
                            <img src="{{asset('assets/images/sliders')}}/{{$slide->image}}" style="width:100%">
                            <div class="text">{{ $slide->title }}</div>
                            </div>
                        @endforeach
                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <br>

                </div>

    </div>
</body>
<body style="background-color: white!important;">
<div class="top-products">
    <div class="container">
        <div class="categories">
            <h1>TOP PRODUCTS</h1>
            <ul>
                <li onmousedown="openTab(event,'Allproducts')" id="defaultOpen">ALL PRODUCTS</li>
                <li onmousedown="openTab(event,'FRUITS')">FRUITS</li>
                <li>VEGETABLES</li>
                <li>FAST FOOD</li>
                <li>DESSERTS</li>
                <li>DRINKS</li>
            </ul>
        </div>
        <div class="tabs">
            <div id="Allproducts" class="tab" style="display: flex;">
                    <div class="card">
                        <img src="{{ asset('assets/images/foodShop/img1.jpg') }}" alt="" style="width:100%">
                        <div class="card-content">
                            <h2 class="title">CHIVKEN NOODELS</h2>
                            <div class="divider"></div>
                            <span class="price">$25.00</span>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{ asset('assets/images/foodShop/img1.jpg') }}" alt="" style="width:100%">
                        <div class="card-content">
                            <h2 class="title">CHIVKEN NOODELS</h2>
                            <div class="divider"></div>
                            <span class="price">$25.00</span>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{ asset('assets/images/foodShop/img1.jpg') }}" alt="" style="width:100%">
                        <div class="card-content">
                            <h2 class="title">CHIVKEN NOODELS</h2>
                            <div class="divider"></div>
                            <span class="price">$25.00</span>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{ asset('assets/images/foodShop/img1.jpg') }}" alt="" style="width:100%">
                        <div class="card-content">
                            <h2 class="title">CHIVKEN NOODELS</h2>
                            <div class="divider"></div>
                            <span class="price">$25.00</span>
                        </div>
                    </div>
            </div>
            <div id="FRUITS" class="tab">
                    <div class="card">
                        <img src="{{ asset('assets/images/foodShop/img1.jpg') }}" alt="" style="width:100%">
                        <div class="card-content">
                            <h2 class="title">FRUITS</h2>
                            <div class="divider"></div>
                            <span class="price">$25.00</span>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{ asset('assets/images/foodShop/img1.jpg') }}" alt="" style="width:100%">
                        <div class="card-content">
                            <h2 class="title">FRUITS</h2>
                            <div class="divider"></div>
                            <span class="price">$25.00</span>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{ asset('assets/images/foodShop/img1.jpg') }}" alt="" style="width:100%">
                        <div class="card-content">
                            <h2 class="title">FRUITS</h2>
                            <div class="divider"></div>
                            <span class="price">$25.00</span>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{ asset('assets/images/foodShop/img1.jpg') }}" alt="" style="width:100%">
                        <div class="card-content">
                            <h2 class="title">FRUITS</h2>
                            <div class="divider"></div>
                            <span class="price">$25.00</span>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<div class="benefits">
    <div class="container">
        <ul>
            <li>
                <span><i class="fas fa-trophy fa-2x"></i></span>
                <h2>title</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, obcaecati molestiae sit
                    quidem rem assumenda ea
                    reiciendis. Numquam deserunt libero quasi dolore voluptate? Quas consequuntur aliquid dolore,
                    nisi ex maxime.</p>
            </li>
            <li>
                <span><i class="fab fa-pagelines fa-2x"></i></span>
                <h2>title</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, obcaecati molestiae sit
                    quidem rem assumenda ea
                    reiciendis. Numquam deserunt libero quasi dolore voluptate? Quas consequuntur aliquid dolore,
                    nisi ex maxime.</p>
            </li>
            <li>
                <span><i class="fas fa-cloud-rain fa-2x"></i></span>
                <h2>title</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, obcaecati molestiae sit
                    quidem rem assumenda ea
                    reiciendis. Numquam deserunt libero quasi dolore voluptate? Quas consequuntur aliquid dolore,
                    nisi ex maxime.</p>
            </li>
            <li>
                <span><i class="fas fa-basketball-ball fa-2x"></i></span>
                <h2>title</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, obcaecati molestiae sit
                    quidem rem assumenda ea
                    reiciendis. Numquam deserunt libero quasi dolore voluptate? Quas consequuntur aliquid dolore,
                    nisi ex maxime.</p>
            </li>
        </ul>
    </div>
</div>

        {{-- <!--Latest Products-->
        <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">Latest Products</h3>
            <div class="wrap-top-banner">
                <a href="#" class="link-banner banner-effect-2">
                    <figure><img src="{{asset('assets/images/digital-electronic-banner.jpg')}}" width="1170" height="240" alt=""></figure>
                </a>
            </div>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">
                    <div class="tab-contents">
                        <div class="tab-content-item active" id="digital_1a">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                                @foreach ($latest_products as $latest_product)
                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="{{route('product.details',['slug' => $latest_product->slug])}}" title="{{$latest_product->name}}">
                                                <figure><img src="{{asset('assets/images/products')}}/{{$latest_product->image}}" width="800" height="800" alt="{{$latest_product->name}}"></figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item new-label">new</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="{{route('product.details',['slug' => $latest_product->slug])}}" class="product-name"><span>{{$latest_product->name}}</span></a>
                                            <div class="wrap-price"><span class="product-price">${{$latest_product->regular_price}}</span></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

<div class="container" >
    <!--Product Categories-->
    <div class="wrap-show-advance-info-box style-1" >
        <h3 class="title-box" style="background-color: #444444;!important;">Product Categories</h3>
        <div class="wrap-products">
            <div class="wrap-product-tab tab-style-1">
                <div class="tab-control">
                    @foreach ($categories as $key=>$category)
                        <a href="#category_{{$category->id}}" class="tab-control-item {{$key == 0 ? 'active' : ''}}">{{$category->name}}</a>
                    @endforeach
                </div>
                <div class="tab-contents">
                    @foreach ($categories as $key=>$category)
                        <div class="tab-content-item {{$key == 0 ? 'active' : ''}}" id="category_{{$category->id}}">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>
                                @php
                                    $c_products = DB::table('products')->where('category_id', $category->id)->get()->take($no_of_products);
                                @endphp
                                    @foreach ($c_products as $c_product)
                                        <div class="product product-style-2 equal-elem " style="background-color: white!important;border:greenyellow 1.5px solid;">
                                            <div class="product-thumnail">
                                                <a href="{{route('product.details',['slug' => $c_product->slug])}}" title="{{ $c_product->name }}">
                                                    <figure><img src="{{asset('assets/images/products')}}/{{$c_product->image}}" width="800" height="800" alt="{{$c_product->name}}"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>{{$c_product->name}}</span></a>
                                                <div class="wrap-price"><span class="product-price">${{$c_product->regular_price}}</span></div>
                                            </div>
                                        </div>
                                    @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{-- sale products --}}
    @if ($sale_products->count() > 0 && $sale_date->status == 1 && $sale_date->sale_date > Carbon\Carbon::now())
        <h1>On Sale</h1>
        <div class="carousel">
            @foreach ($sale_products as $sale_product)
                <a href="{{route('product.details',['slug' => $latest_product->slug])}}" title="{{ $latest_product->name }}">
                    <img src="{{asset('assets/images/products')}}/{{$sale_product->image}}" alt="{{ $sale_product->name }}">
                </a>
            @endforeach
        </div>
    @endif
    {{-- latest products --}}
        <h1>Latest Products</h1>
        <div class="carousel">
            @foreach ($latest_products as $latest_product)
                <a href="{{route('product.details',['slug' => $latest_product->slug])}}" title="{{ $latest_product->name }}">
                    <img src="{{asset('assets/images/products')}}/{{$latest_product->image}}" alt="{{ $latest_product->name }}">
                </a>
            @endforeach
        </div>
        {{-- <h1>title</h1>
        <div class="carousel">
            <img src="{{ asset('assets/images/foodShop/img1.jpg') }}" alt="">
            <img src="{{ asset('assets/images/foodShop/img2.jpg') }}" alt="">
            <img src="{{ asset('assets/images/foodShop/img3.jpg') }}" alt="">
            <img src="{{ asset('assets/images/foodShop/img1.jpg') }}" alt="">
        </div> --}}
</div>
<div class="sale-section">
    <div class="container inner-sale">
        <div>0$ versand weltweit <br> ab 90$ Bestsellwert</div>
        <div>0$ versand weltweit <br> ab 90$ Bestsellwert</div>
    </div>
</div>
<!--slider-->
<div class="container">
    <h1>title</h1>
    <!--slider-->
        <div class="carousel" >
            <img src="{{ asset('assets/images/foodShop/img1.jpg') }}" alt="">
            <img src="{{ asset('assets/images/foodShop/img2.jpg') }}" alt="">
            <img src="{{ asset('assets/images/foodShop/img3.jpg') }}" alt="">
            <img src="{{ asset('assets/images/foodShop/img1.jpg') }}" alt="">
        </div>
        <h1>title</h1>
        <div class="carousel">
            <img src="{{ asset('assets/images/foodShop/img1.jpg') }}" alt="">
            <img src="{{ asset('assets/images/foodShop/img2.jpg') }}" alt="">
            <img src="{{ asset('assets/images/foodShop/img3.jpg') }}" alt="">
            <img src="{{ asset('assets/images/foodShop/img1.jpg') }}" alt="">
        </div>
        <h1>title</h1>
        <div class="carousel">
            <img src="{{ asset('assets/images/foodShop/img1.jpg') }}" alt="">
            <img src="{{ asset('assets/images/foodShop/img2.jpg') }}" alt="">
            <img src="{{ asset('assets/images/foodShop/img3.jpg') }}" alt="">
            <img src="{{ asset('assets/images/foodShop/img1.jpg') }}" alt="">
        </div>
</div>
<div class="hero-img" style="height: 50rem;">
        <div class="container">
            <div class="inner-hero">
                <div>0$ versand weltweit <br> ab 90$ Bestsellwert</div>
                <div>0$ versand weltweit <br> ab 90$ Bestsellwert</div>
            </div>
        </div>
</div>
<div class="features" style="height: 50rem;">
    <div class="container">
        <h1>Unsere Garantien an sie</h1>
        <div class="inner-features">
            <div class="feature">
                <i class="fas fa-money-bill-alt fa-2x" style="color: rgb(142 206 146);"></i>
                <div>Kauf auf</div>
                <div class="divider"></div>
                <span>Rechnung</span>
            </div>
            <div class="feature">
                <i class="fas fa-truck fa-2x" style="color: rgb(142 206 146);"></i>
                <div>Kauf auf</div>
                <div class="divider"></div>
                <span>Rechnung</span>
            </div>
            <div class="feature">
                <i class="fas fa-shopping-basket fa-2x" style="color: rgb(142 206 146);"></i>
                <div>Kauf auf</div>
                <div class="divider"></div>
                <span>Rechnung</span>
            </div>
            <div class="feature">
                <i class="fas fa-calendar-alt fa-2x" style="color: rgb(142 206 146);"></i>
                <div>Kauf auf</div>
                <div class="divider"></div>
                <span>Rechnung</span>
            </div>
        </div>
    </div>
</div>
<div class="newsletter">
    <div class="container">
        <h1>Zum newsletter anmelden</h1>
        <div class="newsletter-box">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero aut tempore quia reiciendis veniam ea
                consequuntur mollitia fugit, porro nesciunt incidunt unde! Doloribus corporis sapiente nisi vel
                totam nobis temporibus?</p>
            <input type="text" name="" id="" placeholder="E-mail">
            <button><i class="fas fa-envelope"></i></button>
        </div>
    </div>
</div>
</body>
{{-- <div class="brand-imgs">
    <img src="{{ asset('assets/images/foodShop/img1.jpg') }}" alt="">
    <img src="{{ asset('assets/images/foodShop/img1.jpg') }}" alt="">
    <img src="{{ asset('assets/images/foodShop/img1.jpg') }}" alt="">
    <img src="{{ asset('assets/images/foodShop/img1.jpg') }}" alt="">
</div> --}}

{{-- end home page --}}

