<!DOCTYPE html>

<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Nhà Sách Phương Nam')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body { background-color: #f4f4f4; }
        header { background-color: #fff; padding: 10px 0; border-bottom: 1px solid #ddd; }
        
        /* Menu Sidebar màu đỏ cam giống mẫu */
        .navbar { background-color: #ff5850; padding: 0; }
        .navbar-nav { width: 100%; }
        .nav-item { border-bottom: 1px solid rgba(255,255,255,0.1); width: 100%; }
        .nav-item a { color: #fff !important; font-weight: bold; padding: 12px 20px !important; display: block; }
        .nav-item:hover { background-color: #e54e47; }

        /* Bố cục Grid cho danh sách sách */
        .list-book { display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px; padding: 15px 0; }
        .book { text-align: center; background: #fff; padding: 10px; border-radius: 4px; transition: 0.3s; }
        .book:hover { box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .book img { width: 100%; height: 200px; object-fit: cover; }
        .book-title { font-size: 14px; font-weight: bold; margin-top: 10px; color: #333; height: 40px; overflow: hidden; }
        .price { color: #d0021b; font-weight: bold; margin-top: 5px; }
    </style>
</head>
<body>
    <header class="text-center">
        <img src="{{ asset('images/banner_sach.jpg') }}" style="max-width: 1000px; width: 100%;">
    </header>

    <main class="container" style="max-width: 1000px; margin-top: 10px;">
        <div class="row">
            <div class="col-md-3 pr-0">
                <nav class="navbar navbar-dark">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="{{ url('sach') }}">Trang chủ</a></li>
                        <li class="nav-item"><a href="{{ url('sach/theloai/1') }}">Tiểu thuyết</a></li>
                        <li class="nav-item"><a href="{{ url('sach/theloai/2') }}">Truyện ngắn - tản văn</a></li>
                        <li class="nav-item"><a href="{{ url('sach/theloai/3') }}">Tác phẩm kinh điển</a></li>
                    </ul>
                </nav>
                <img src="{{ asset('images/sidebar_1.jpg') }}" class="w-100 mt-2">
                <img src="{{ asset('images/sidebar_2.jpg') }}" class="w-100 mt-2">
            </div>

            <div class="col-md-9">
                @yield('content')
            </div>
        </div>
    </main>

    <footer class="container text-center mt-5 py-4 border-top" style="max-width: 1000px;">
        <div class="row font-weight-bold">
            <div class="col-4">TRỤ SỞ</div>
            <div class="col-4">THÔNG TIN CHUNG</div>
            <div class="col-4">BẢN ĐỒ</div>
        </div>
    </footer>
</body>

<html>

