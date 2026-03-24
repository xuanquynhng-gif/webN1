<h2>DANH SÁCH BỘ PHIM CỦA CANADA</h2>

@foreach($ds_phim as $row)
    <p>
        - <b>Tên phim:</b> {{ $row->movie_name }} <br>
        - <b>Ngày phát hành:</b> {{ $row->release_date }} <br>
        - <b>Thời lượng:</b> {{ $row->runtime }} phút
    </p>
    <hr>
@endforeach

