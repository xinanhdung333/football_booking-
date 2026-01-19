@extends('layouts.app')

@section('content')
<div class="py-4">
    <h1>Bảng điều khiển</h1>
    <p>Xin chào, {{ optional($user)->name }}</p>
</div>
@endsection
