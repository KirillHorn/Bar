@extends('app.header')
@section('title', 'Too Much, Too Little')
@section('content')
<section class="auth_section register">
    <div class="container">
            <h2>
                Регистрация
            </h2>

            <form method="POST" action="" class="auth">
            <div class="auth_element">
                <label>Имя</label>
                <input type="type" name="name">
                <div class="element_input"></div>
            </div>
                 <div class="auth_element">
                <label>Фамилия</label>
                <input type="type" name="surname">
                 <div class="element_input"></div>
                 </div>
                  <div class="auth_element">
                <label>Отчество</label>
                <input type="type" name="patronymic">
                <div class="element_input"></div>
                </div>
                <div class="auth_element">
                <label>Электронная почта</label>
                <input type="email" name="email">
                <div class="element_input"></div>
                </div>
                <div class="auth_element">
                <label>Пароль</label>
                <input type="password" name="password" >
                <div class="element_input"></div>
                </div>
                <div class="auth_element">
                <label>Повтор пароля</label>
                <input type="password" name="password" >
                <div class="element_input"></div>
                </div>
                <div class="auth_element">
                <label>Дата рождения</label>
                <input type="date" name="birthday" >
                <div class="element_input"></div>
                </div>
                <div>
                <input type="submit" value="Регистрация" class="submit_auth" >
                </div>
            </form>
    </div>
  
</section>

@endsection('content')


