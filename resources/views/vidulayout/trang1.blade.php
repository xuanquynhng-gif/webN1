@extends('layouts.main')

@section('title', 'Danh mục sách')

@section('content')
    <div class="list-book">
        @foreach($books as $row)
        <div class="book">
            <img src="{{ asset('images/'.$row->file_anh) }}" alt="{{ $row->ten_sach }}">
            <div class="book-title">{{ $row->ten_sach }}</div>
            <div class="price">{{ number_format($row->gia, 0, ',', '.') }}đ</div>
        </div>
        @endforeach
    </div>
@endsection