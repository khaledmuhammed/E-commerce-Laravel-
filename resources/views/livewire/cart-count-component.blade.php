<a href="{{ route('product.cart') }}" class="link-direction">
        @if(Cart::instance('cart')->count() > 0 )
            <i class="fas fa-shopping-cart fa-lg"></i>
            <span class='badge badge-warning' id='lblCartCount'> {{Cart::instance('cart')->count()}} </span>
            @endif
</a>
