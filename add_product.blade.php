@extends('layout.layout_admin')

@section('title', 'Thêm sản phẩm')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Thêm sản phẩm mới</h1>
    </div>
</div>

<div class="row">
    <div class="col-lg-8">
        <!-- Hiển thị thông báo -->
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form thêm sản phẩm -->
        <form role="form" method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label>Tên sản phẩm</label>
                <input type="text" name="name" class="form-control" placeholder="Nhập tên sản phẩm" required>
            </div>

            <div class="form-group">
                <label>Giá</label>
                <input type="number" name="price" class="form-control" placeholder="Nhập giá" required>
            </div>

            <div class="form-group">
                <label>Mô tả</label>
                <textarea name="description" class="form-control" rows="3" placeholder="Nhập mô tả sản phẩm"></textarea>
            </div>

            <div class="form-group">
                <label>Hình ảnh</label>
                <input type="file" name="image" class="form-control">
            </div>

            <button type="submit" class="btn btn-success">Thêm sản phẩm</button>
            <a href="{{ url('/index_admin') }}" class="btn btn-default">Quay lại</a>
        </form>
    </div>
</div>
@endsection
