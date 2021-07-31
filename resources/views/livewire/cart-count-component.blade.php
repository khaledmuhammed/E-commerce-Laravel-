<a href="{{ route('product.cart') }}" class="link-direction">
            <i class="fas fa-shopping-cart fa-lg"></i>
            <span class='badge badge-warning' id='lblCartCount'> {{Cart::instance('cart')->count()}} </span>
</a>
