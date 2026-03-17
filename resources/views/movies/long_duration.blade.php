<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>danh sách phim thời lượng lớn</title>
    <style>
        /* định dạng bảng */
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
        /* màu nền cho tiêu đề bảng */
        th { 
            background-color: #f2f2f2; 
            color: #333333; 
        }
        /* màu nền xen kẽ cho các hàng */
        tr:nth-child(even) { 
            background-color: #fafafa; 
        }
    </style>
</head>
<body>

    <h2>danh sách 10 phim có thời lượng trên 120 phút</h2>

    <table>
        <thead>
            <tr>
                <th>stt</th>
                <th>tên bộ phim</th>
                <th>ngày phát hành</th>
                <th>thời lượng</th>
            </tr>
        </thead>
        <tbody>
            @foreach($movies as $index => $movie)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td><strong>{{ $movie->movie_name }}</strong></td>
                <td>{{ $movie->release_date }}</td>
                <td>{{ $movie->runtime }} phút</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>