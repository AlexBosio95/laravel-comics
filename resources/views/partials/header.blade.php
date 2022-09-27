<header>
    <div class="container my-3">
        <div class="row row-cols-2 align-items-center">
            <div class="col-3">
                <img src="{{asset('images/dc-logo.png')}}" alt="dc logo">
            </div>
            <div class="col-9">
                <nav>
                    <ul class="d-flex justify-content-end m-0">
                        @foreach ($menuItems as $item)
                        <li class="mb-0 fw-semibold">{{$item['text']}}</li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>


