<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>danh sách phim canada</title>
    <style>
        /* dùng chung một kiểu định dạng bảng cho cả nhóm để đồng bộ */
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

    <h2>danh sách bộ phim của canada</h2>

    <table>
        <thead>
            <tr>
                <th>stt</th>
                <th>tên phim</th>
                <th>ngày phát hành</th>
                <th>thời lượng</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ds_phim as $index => $row)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td><strong>{{ $row->movie_name }}</strong></td>
                <td>{{ $row->release_date }}</td>
                <td>{{ $row->runtime }} phút</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>