<h1>Danh sách 10 phim trên 120 phút</h1>

@foreach($movies as $movie)
    <div>
        <strong>{{ $movie->movie_name }}</strong><br>
        Ngày phát hành: {{ $movie->release_date }} | 
        Thời lượng: {{ $movie->runtime }} phút
    </div>
    <hr>
@endforeach