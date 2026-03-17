<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>danh sách thể loại phim</title>
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

    <h2>danh sách các thể loại phim</h2>

    <table>
        <thead>
            <tr>
                <th>stt</th>
                <th>tên thể loại (tiếng anh)</th>
                <th>tên thể loại (tiếng việt)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($the_loai as $index => $row)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $row->genre_name }}</td>
                <td>{{ $row->genre_name_vn }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>