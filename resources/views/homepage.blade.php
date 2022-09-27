@extends('layout.app')

@section('content')

<div class="mj_container">
        <div class="container position-relative wrapper-cards">
            <div class="cards-container">
                    @foreach ($discs as $disc)
                        <div class="ms_card">
                            <img src="{{ $disc['thumb'] }}" alt="" srcset="">
                            <h6 class="text-card">{{ $disc['title'] }}</h6>
                        </div>
                    @endforeach
            </div>
        </div>

        <div class="text-center">
            <button class="btn-more mb-3 fw-bold">LOAD MORE</button>
        </div>
</div>

@endsection