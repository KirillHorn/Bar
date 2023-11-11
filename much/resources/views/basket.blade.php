@extends('app.header')
@section('title', 'Too Much, Too Little')
@section('content')
<section class="section_catalog">
    <div class="container">
     <h2>Корзина</h2>
     <div class="basket_main">
        <div class="basket_product"> 
            <div>
            <img src="img/pivo2.jpg">
            <p>Пиво Хмельное</p>
            </div>
                <div>
            <p>300</p>
            <p>2</p>
             </div>
        </div>
        <hr>
        <div class="basket_product"> 
            <div>
            <img src="img/pivo2.jpg">
            <p>Пиво Хмельное</p>
            </div>
                <div>
            <p>300</p>
            <p>2</p>
             </div>
        </div>
        <hr>
        <div class="basket_check">
            <div class="basket_chech_info">
                <p class="itor">Итого</p>
                <p class="price">900Р</p>
                <a>Оформить заказ</a>
            </div>
        </div>
    </div>
</section>

@endsection('content')


