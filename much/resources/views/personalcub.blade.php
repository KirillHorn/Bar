@extends('app.header')
@section('title', 'Too Much, Too Little')
@section('content')
<section class="section_personalcub">
    <div class="container">
        <div class="logo_personal">
            <h2>Добро Пожаловать Алексей   </h2>
            <img src="/img/personalElement.png">
        </div>
            <div class="main_personal">
                <div class="information_personal">
                    <h2>Личная информация</h2>
                    <img src="/img/elementper.png" class="element_personal">
                        <div class="info_pers">
                                <div>
                    <p>Имя  <span>[Алексей]</span></p>
                    <p>Фамилия  <span>[Алексей]</span></p>
                    <p>Отчество  <span>[Алексей]</span></p>
                    <p>Номер телефона  <span>[Алексей]</span></p>
                    <p>Электронная почта  <span>[Алексей]</span> </p>
                    <p>Возраст  <span>[Алексей]</span> </p>
                    </div>
                    <button class="redict_pers">Редактировать</button>
                    <button class="logout_pers">Выйти</button>
                        </div>
                </div>
                    <div>
                        <h2>Ваши заказы</h2>
                        <img src="/img/el1.png" class="element_personal">
                            <div class="order_info">
                        <div>1</div>
                        <div>2</div>
                        <div>3</div>
                        <div>4</div>
                            </div>
                    </div>
            </div>
    </div>
</section>

@endsection('content')


