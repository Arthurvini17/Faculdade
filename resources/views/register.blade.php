<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/register.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/d4d5949181.js" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="container-form">
            <form action="{{route('register.store')}}" method="POST">
                @csrf
                <div class="container-logo">
                    <img src="{{ Vite::asset('resources/images/logopa.png') }}" alt="">
                </div>

                <p>Bem-vindo aluno!</p>
                <p>Crie sua conta aqui!</p>


                <div class="form-control">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="name" placeholder="Nome">
                </div>

                <div class="form-control">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="email" placeholder="Email">
                </div>

                <div class="form-control">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="password" placeholder="Senha">
                </div>
                <label>
                    <input type="checkbox" name="remember"> Lembrar conta
                </label>
                <a  class="have-account" href="#">Ja tenho uma conta</a>

                

                <div class="container-btn">
                    <button  class="btn-entrar" type="submit">Entrar</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
