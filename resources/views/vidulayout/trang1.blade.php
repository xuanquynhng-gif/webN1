
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

@extends("layouts.main")
@section("title","Trang nội dung 1")
@section("content")
<div class="bg-primary m-5"

    style='height:300px;display:flex;align-items:center; justifycontent:center;color:white'>
    NỘI DUNG CHÍNH CỦA TRANG 1
</div>
@endsection

style='height:300px;display:flex;align-items:center; justify-content:center;color:white'>
NỘI DUNG CHÍNH CỦA TRANG 1
</div>
@endsection


