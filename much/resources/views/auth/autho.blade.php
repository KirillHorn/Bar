@extends('app.header')
@section('title', 'Too Much, Too Little')
@section('content')
<section class="auth_section">
    <div class="container">
            <h2>
                Вход
            </h2>

            <form method="POST" action="" class="auth">
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
                <div>
                <input type="submit" value="Войти" class="submit_auth" >
                </div>
            </form>
    </div>
  
</section>

@endsection('content')


