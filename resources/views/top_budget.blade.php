<!DOCTYPE html>
<html>
<head>
    <title>Top 10 phim doanh thu cao nhất</title>
</head>
<body>
    <h1>Danh sách 10 bộ phim có doanh thu cao nhất</h1>
    
    <ul>
        @foreach ($movies as $phim)
            <li>
                <strong>Tên phim:</strong> {{ $phim->movie_name }} <br>
                <strong>Ngày phát hành:</strong> {{ $phim->release_date }} <br>
                <strong>Doanh thu:</strong> {{ number_format($phim->budget) }} USD
            </li>
            <br>
        @endforeach
    </ul>

</body>
</html>