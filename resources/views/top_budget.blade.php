<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>top 10 phim doanh thu cao nhất</title>
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
        .revenue {
            color: #27ae60;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h2>danh sách 10 bộ phim có doanh thu cao nhất</h2>

    <table>
        <thead>
            <tr>
                <th>stt</th>
                <th>tên bộ phim</th>
                <th>ngày phát hành</th>
                <th>doanh thu (usd)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $index => $phim)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td><strong>{{ $phim->movie_name }}</strong></td>
                <td>{{ $phim->release_date }}</td>
                <td class="revenue">{{ number_format($phim->budget) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>