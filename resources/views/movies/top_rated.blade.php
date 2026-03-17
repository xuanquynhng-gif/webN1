<!DOCTYPE html>
<html>
<head>
    <title>Top 10 Phim Điểm Cao</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>DANH SÁCH 10 BỘ PHIM CÓ ĐIỂM BÌNH CHỌN CAO NHẤT</h2>
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên phim (Tiếng Anh)</th>
                <th>Điểm bình chọn</th>
                <th>Ngày phát hành</th>
            </tr>
        </thead>
        <tbody>
            @foreach($movies as $index => $movie)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $movie->movie_name_vn }}</td>
                <td><strong>{{ $movie->vote_average }}</strong></td>
                <td>{{ $movie->release_date }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>