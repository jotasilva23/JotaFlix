<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jota Filmes do Brasil</title>
    <meta name="desciption" content="Teste NEPEN">
    <meta name="keywords" content="filmes">
    <meta name="robots" content="index,follow">
    <meta name="author" content="jocelio">

    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" href="img/">
    <!-- Uso de icones -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">


    <!-- Uso de fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300&display=swap" rel="stylesheet">

    <link rel="icon" href="img/icon.png">
    <!--    <script type="text/javascript" src="/caminho/jquery-3.5.1.min.js "></script>  -->


</head>

<body>

    <header class="cabecalho">
        <a href="index.html">
            <h1 class="logo"> Design</h1>
        </a>

        <button class="btn-menu"> <i class="fa fa-bars fa-lg"></i></button>

        <nav class="menu">
            <a class="btn-close"><i class="fa fa-times"></i></a>
            <ul>
                <li><a href="/">Início</a></li>
                <li><a href="/insertUsers">Cadastrar Usuários</a></li>
                <li><a href="/insertFilmes">Cadastrar Filmes</a></li>
                <button><a href=""> Pesquisar<i class="fa fa-search"></i></a></button>
            </ul>
        </nav>
    </header>


    <section class="inscricao">
       {{--  @foreach ($filmes as $filme)
            @if($filme != null){
                <h2> Filmes novos</h2>
                @break
            }
            @endif
        @endforeach --}}
       
        <button class="btn-menu"> <i class="fa fa-bars fa-lg"></i></button>

    </section>

    @foreach ($users as $user)
    
        <div main class="users">
            <article class="user">
                <img src="img/user.png" alt="servicos">
                <div class="inner">
                    <h2>{{ $user->name }}</h2>
                    <h2>{{ $user->email }}</h2>
                </div>
            </article>
        </div>
    @endforeach


    <section class="inscricao">
        <h2>Inscreva-se agora</h2>
        <h3> Receba novidades sobre novos filmes</h3>

        <form action="" method="post">
            <input type="email" name="email" placeholder="Digite seu email">
            <button>Cadastrar</button>
        </form>
    </section>


    <footer class="rodape">
        <div class="social-icons">
            <a href=""><i class="fab fa-facebook"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
            <a href=""><i class="fab fa-linkedin"></i></a>
        </div>

        <p class="copyright">
            Copyright &copy JOTAFLIX.COM com todos os direitos reservados.
        </p>
    </footer>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.js"></script>


    <script>
        $(".btn-menu").click(function() {
            $(".menu").show();
        });
    </script>

    <script>
        $(".btn-close").click(function() {
            $(".menu").hide();
        });
    </script>
</body>

</html>
