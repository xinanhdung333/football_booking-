@extends('layouts.app')

@section('content')
<h1>Dịch vụ</h1>
<div class="row">
    @foreach($services as $service)
        <div class="col-md-4">
            <div class="card mb-3">
                <img src="{{ $service->image ? asset('uploads/services/'.$service->image) : asset('assets/images/banner.jpg') }}" class="card-img-top" style="height:150px; object-fit:cover;">
                <div class="card-body">
                    <h5>{{ $service->name }}</h5>
                    <p>{{ Str::limit($service->description, 120) }}</p>
                    <a href="{{ route('services.show', $service->id) }}" class="btn btn-primary">Xem chi tiết</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
