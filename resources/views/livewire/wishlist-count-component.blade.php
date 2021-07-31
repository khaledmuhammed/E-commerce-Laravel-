{{-- <div class="wrap-icon-section wishlist">
    <a href="{{route('product.wishlist')}}" class="link-direction">
        <i class="fa fa-heart" aria-hidden="true"></i>
        <div class="left-info">
            @if (Cart::instance('wishlist')->count() > 0 )
                <span class="index">{{ Cart::instance('wishlist')->count() }} item</span>
            @endif
            <span class="title">Wishlist</span>
        </div>
    </a>
</div> --}}

<a href="{{route('product.wishlist')}}" class="link-direction">
    <i class="fa fa-heart" aria-hidden="true"></i>
        @if (Cart::instance('wishlist')->count() > 0 )
            <i class="fas fa-heart fa-lg"></i>
            <span class='badge badge-warning' id='lblCartCount'> {{ Cart::instance('wishlist')->count() }}  </span>
        @endif
</a>
