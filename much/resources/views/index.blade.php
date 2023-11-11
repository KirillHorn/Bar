@extends('app.header')
@section('title', 'Too Much, Too Little')
@section('content')
    <section class="banner">
        <div class="container banner_main">
            <div class="banner_logo">
                <h2><span>TOO MUCH, TOO LITTLE </span> - ПОЗВОЛЬ СЕБЕ СТАТЬ ЛЕГЕНДОЙ</h2>
            </div>
            <div class="d-flex justify-content-center nav_block_two ">
                <a style="color: #000">Оформить заказ</a>
                <a style="color: #000">Напитки</a>
            </div>
        </div>
    </section>
    <section class="information">
        <div class="container">
            <img src="/img/element 1.png" style="margin-top: 70px ;">
            <div class="information_main">
                <h2>О НАС</h2> <a href="https://warthunder.ru/ru" style="color: #FCEE0A;">ТАНКИ ТАНКИ</a>
                <div class="information_main_content">
                    <img src="/img/foto.png" class="information_img">
                    <p>Как говорят на улицах, в Уфе светлое будущее начинается с «To Much To Little». Если вы до него
                        добираетесь, перед вами сразу открываются все дороги. «Посмертие» — легендарный бар, где
                        расслабляются только достойные люди.</p>
                </div>
            </div>


            <img src="/img/element 2.png" class="element_2">
        </div>
    </section>
    <section class="product_sector">
        <div class="container">
            <div class="product_title">
                <h2>НАПИТКИ</h2> <img src="img\zipper.png">
                <h2>ЕДА</h2>
            </div>
            <div class="product_content">
                <div class="product_block">
                    <img src="img/pivo2.jpg">
                    <p>Пиво крепкое</p>
                    <span>300 ₽</span>
                    <a style="color:#FCEE0A;" href="/product">Купить</a>
                </div>

                <div class="product_block">
                    <img src="img/pivo.png">
                    <p>Пиво крепкое</p>
                    <span>300 ₽</span>
                    <a style="color:#FCEE0A;" href="/product">Купить</a>
                </div>

                <div class="product_block">
                    <img src="img/pivo3.jpg">
                    <p>Пиво крепкое</p>
                    <span>300 ₽</span>
                    <a style="color:#FCEE0A;" href="/product">Купить</a>
                </div>
            </div>

        </div>
    </section>


@endsection('content')
