@extends('app.header')
@section('title', 'Too Much, Too Little')
@section('content')
<section class="section_product">
    <div class="container">
    <div class="content_product">
       <div class="content_product_main">
        <img src="img/pivo.png" class="foto_product">
        <img src="img/element_product.png" class="element_top">
       </div>
            <div class="product_text"> 
                <h2>Эль светлый</h2>
                <p><span>Описание:</span> Обращаем Ваше внимание, что текстовая информация на сайте должна быть индивидуальной, не скопированной с других интернет-ресурсов, о чем указано в рекомендациях Яндекса: «Мы стараемся не индексировать или не ранжировать высоко сайты, копирующие информацию с других ресурсов и не создающие оригинального контента или сервиса».</p>
                <p>Цена: <span>100₽</span></p>
            </div>
         </div>
        <a class="buy" href="/basket">Купить</a>
    </div>
</section>

@endsection('content')


