<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>BikeGo - Thuê xe đạp điện</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Đã thêm hàm asset() để gọi CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/master_bikego.css') }}">
</head>

<body>

    <!-- Gọi phần Header -->
    @include('layouts.header')

    <!-- Phần nội dung sẽ thay đổi tùy theo trang -->
    @yield('content')

    <!-- Gọi phần Footer -->
    @include('layouts.footer')

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Đã thêm hàm asset() để gọi JS -->
<script src="{{ asset('assets/js/master_bikego.js') }}"></script>
</body>
</html>