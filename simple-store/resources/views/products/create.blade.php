@extends('master')

@section('title', 'Thêm Sản Phẩm')

@section('content')
    <h1>Thêm Sản Phẩm</h1>

    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <label for="name">Tên Sản Phẩm:</label>
        <input type="text" name="name" required>

        <label for="price">Giá:</label>
        <input type="number" name="price" required>

        <label for="description">Mô Tả:</label>
        <textarea name="description" required></textarea>

        <button type="submit">Thêm Sản Phẩm</button>
    </form>
@endsection