<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header class="bg-light p-3">
        <div class="container d-flex justify-content-between align-items-center">
            <a href="{{ route('index') }}">
                <img src="{{ asset('images/logo.png') }}" alt="トップページへ戻る" id="home-icon" class="img-fluid" style="width: 50px;">
            </a>
            <nav>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="btn btn-primary btn-lg m-2" href="{{ route('profile') }}">
                            <i class="fas fa-user-graduate"></i> ゼミ生のプロフィール
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary btn-lg m-2" href="{{ route('activities') }}">
                            <i class="fas fa-history"></i> 過去の活動
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container my-5">
        @yield('content')
    </main>

    <footer class="bg-light p-3 text-center">
        <div> インスタグラムはこちらから！</div>
        <br>
        <a href="https://www.instagram.com/taguc_chaaan?igsh=NzNzMXFseGk5ejZn" target="_blank">
            <img src="{{ asset('images/instagram_icon.png') }}" alt="Instagram" class="img-fluid" style="width: 40px;">
        </a>
        <br>
        <a>@taguc_chaaan</a>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
