<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <x-link></x-link>
</head>

<body>
    <x-header></x-header>
    <div class="container mt-5">
        <div class="form mx-auto text-center">
            <form action="/auth_valid" method="POST" class="d-flex flex-column gap-3">
                @csrf
                <h3 class="fw-bold">Авторизация</h3>
                <input type="email" placeholder="Введите свой адрес электронной почты" name="email"
                    value="{{ old('Email') }}">
                    @error('Email')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
                <input type="password" placeholder="Введите пароль" name="password" value="{{ old('Password') }}">
                @error('Password')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
                <input type="submit" class="text-white" value="Войти">
            </form>
            <hr>
            <p>Входя в аккаунт или создавая новый, вы соглашаетесь с нашими</p>
            <p><a href="">Правилами и условиями</a> и <a href="">Положением о конфиденциальности</a></p>
        </div>
    </div>
</body>

</html>
