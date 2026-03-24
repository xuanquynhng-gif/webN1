<!DOCTYPE html>
<html>
<head>
    <title>Top 10 Phim</title>
</head>
<body>
    <h1>Danh sách 10 phim có điểm cao nhất</h1>

    <ul>
        @foreach($movies as $movie)
            <li>
                <strong>{{ $movie->movie_name }}</strong> 
                - Điểm: {{ $movie->vote_average }} 
                (Tên tiếng Việt: {{ $movie->movie_name_vn }})
            </li>
        @endforeach
    </ul>

</body>
</html>