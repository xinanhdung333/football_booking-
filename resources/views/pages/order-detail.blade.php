@extends('layouts.app')

@section('content')
<div class="py-4">
    <h1>Chi tiết đơn hàng</h1>
    @if(session('success'))<div class="alert alert-success">{{ session('success') }}</div>@endif
    <p>Đơn hàng mô phỏng - hiển thị thông tin sau khi thanh toán.</p>
</div>
@endsection
