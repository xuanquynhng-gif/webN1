<div>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
</div>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Quản lý Sách' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .footer { margin-top: 50px; padding: 20px; background: #343a40; color: white; text-align: center; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="/">Book Store</a>
            <div class="navbar-nav">
                <a class="nav-link" href="/">Trang chủ</a>
                </div>
        </div>
    </nav>

    <div class="container">
        {{ $slot }}
    </div>

    <div class="footer">
        <p>© 2026 - Bài tập nhóm MIS - Nhóm của Quỳnh</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>