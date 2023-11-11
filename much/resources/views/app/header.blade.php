<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Too Much, Too Little</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="/style/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="/img/icon.png" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>

</head>

<body>
    <header class="">
        <div class="d-flex justify-content-between">
            <div>
                <img src="/img/Polygon 3.png">
            </div>
            <div class="container-fluid d-flex align-items-center justify-content-between">
                <div class="logo_block">
                    <img src="/img/logo.png">
                    <p>Too Much, Too Little</p>
                </div>
                <div class="nav_block_one">
                    <a href="/">О нас</a>
                    <a href="/catalog">Еда</a>
                    <a>Напитки</a>
                </div>
                <div class="nav_block_twod d-flex justify-content-evenly aling-items-center">
                    <a href="/autho">Войти</a>
                    <a href="/register">Регистрация</a>
                    <a href="/personalcub">Кабинет</a>
                </div>
            </div>
            <div class="triangle">
                <img src="/img/Polygon 2.png">
            </div>
        </div>

    </header>
    @yield('content')
    <footer>
        <hr>
        <div class="footer_main">
            <div class="footer_logo">
                <div class="footer_logo_content">
                    <img src="img\logo2.png">
                    <h2>Too Much, Too Little</h2>
                </div>
                <div>
                    <img src="img\socials.png">
                    <img src="img\socials2.png">
                    <img src="img\socials3.png">
                </div>
            </div>
            <div>
                <ul>
                    <li>О нас</li>
                    <li>Напитки</li>
                    <li>Закуски</li>
                    <li>Условия</li>
                </ul>
            </div>
            <div>
                <ul>
                    <li>Войти</li>
                    <li>Регистрация</li>
                    <li>Личный кабинет</li>
                </ul>
            </div>
        </div>
    </footer>
