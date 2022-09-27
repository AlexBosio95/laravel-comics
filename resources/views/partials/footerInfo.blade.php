<footer>
    <div class="bg-cover ms_container">
        <div class="container">
            <div class="row row-cols-3">
                <div class="col-5 my-5">
                    <!-- Link -->
                    <div class="row row-cols-3">
                        <div class="col">
                                <h4 class="fw-bold">Dc Comics</h4>
                                <ul class="p-0 mt-4">
                                    @foreach ($LinkDC as $item)
                                        <li>{{$item['text']}}</li>
                                    @endforeach
                                </ul>

                                <h4 class="fw-bold mt-4">Shop</h4>
                                <ul class="p-0 mt-4">
                                    @foreach ($LinkShopList as $item)
                                        <li>{{$item['text']}}</li>
                                    @endforeach
                                </ul>
                        </div>

                        <div class="col">
                                <h4 class="fw-bold">Dc</h4>
                                <ul class="p-0 mt-4">
                                    @foreach ($LinkUtility as $item)
                                        <li>{{$item['text']}}</li>
                                    @endforeach
                                </ul>
                        </div>

                        <div class="col">
                                <h4 class="fw-bold">Sites</h4>
                                <ul class="p-0 mt-4">
                                    @foreach ($LinkSite as $item)
                                        <li>{{$item['text']}}</li>
                                    @endforeach
                                </ul>
                        </div>
                    </div>
                </div>

                <div class="col-2"></div>

                <div class="col-5 image">

                </div>
            </div>
        </div>

    </div>
</footer>