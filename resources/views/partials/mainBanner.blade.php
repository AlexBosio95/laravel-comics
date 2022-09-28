<div class="my_container">
    <div class="container py-5 d-flex align-items-center justify-content-center">
        <div class="products m-2">
                @foreach ($Products as $product)
                    <div class="product">
                        <img src="{{asset('/images/buy-comics-digital-comics.png')}}" alt="">
                        <span class="fw-bold">{{$product['text']}}</span>
                    </div>
                @endforeach
            </div>
    </div>
</div>