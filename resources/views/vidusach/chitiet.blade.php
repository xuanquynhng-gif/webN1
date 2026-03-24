@extends("layouts.sach_layout")
@section("title", "Chi tiết sách")
@section("content")
<div class="row">
    <div class="col-5">
        <img src="{{asset('book_image/'.$sach->file_anh_bia)}}" width="100%">
    </div>
    <div class="col-7">
        <h3>{{$sach->tieu_de}}</h3>
        <p><b>Nhà cung cấp:</b> {{$sach->nha_cung_cap}}</p>
        <p><b>Nhà xuất bản:</b> {{$sach->nha_xuat_ban}}</p>
        <p><b>Tác giả:</b> {{$sach->tac_gia}}</p>
        <p><b>Hình thức bìa:</b> {{$sach->hinh_thuc_bia}}</p>
    </div>
</div>
<div class="row mt-3">
    <div class="col-12">
        <b>Mô tả:</b>
        <p style="text-align: justify;">{{$sach->mo_ta}}</p> [cite: 365, 366]
    </div>
</div>
@endsection