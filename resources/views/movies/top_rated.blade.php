<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>danh sách 10 phim điểm cao nhất</title>
    <style>
        /* dùng chung một kiểu định dạng bảng cho cả nhóm */
        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin-top: 20px; 
            font-family: sans-serif;
        }
        th, td { 
            border: 1px solid #dddddd; 
            padding: 12px; 
            text-align: left; 
        }
        th { 
            background-color: #f2f2f2; 
            color: #333333; 
        }
        tr:nth-child(even) { 
            background-color: #fafafa; 
        }
    </style>
</head>
<body>

    <h2>danh sách 10 phim có điểm bình chọn cao nhất</h2>

    <table>
        <thead>
            <tr>
                <th>stt</th>
                <th>tên bộ phim</th>
                <th>tên tiếng việt</th>
                <th>điểm bình chọn</th>
            </tr>
        </thead>
        <tbody>
            @foreach($movies as $index => $movie)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td><strong>{{ $movie->movie_name }}</strong></td>
                <td>{{ $movie->movie_name_vn }}</td>
                <td><span style="color: #e67e22; font-weight: bold;">{{ $movie->vote_average }}</span></td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>