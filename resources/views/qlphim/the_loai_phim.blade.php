<html>
    <head>

    </head>
    <body>
        @foreach ($the_loai as $row)
            Tên thể loại Tiếng Anh: {{ $row -> genre_name }}, Tên thể loại Tiếng Việt: {{ $row -> genre_name_vn }}<br>
        @endforeach
    </body>
</html>