@extends('layout.app')

@section('content')
    @foreach ($discs as $disc)
        {{ $disc['title'] }}
    @endforeach
@endsection