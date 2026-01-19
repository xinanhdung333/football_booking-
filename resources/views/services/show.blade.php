@extends('layouts.app')

@section('content')
<div class="py-4">
    <h1>{{ $service->name }}</h1>
    <p>{{ $service->description }}</p>
    <p class="fw-bold">Giá: {{ number_format($service->price,0,',','.') }}</p>
    <a href="{{ route('cart.add') }}" class="btn btn-primary">Thêm vào giỏ (mô phỏng)</a>
</div>
@endsection
