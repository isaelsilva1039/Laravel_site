<html>
    </head>
        {{--   @yield e so pra dedinir o nome e depois puxar na outra pagina  --}}
        <title> @yield('title')</title>
        {{-- css da aplicação --}}
        <link  rel="stylesheet" href="/css/styles.css">
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        {{-- css do google fonts --}}
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
         {{-- link bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
        <body>
            <header>
                <nav class="navbar navbar-expand-lg navbar-light">
                  <div class="collapse navbar-collapse" id="navbar">
                     <a href="/" class="navbar-brand">
                        <img src="/img/hdcevents_logo.svg" alt="Duarte">
                     </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                         <a href="/" class="nav-link"> Eventos</a>
                     </li>
                    <li class="nav-item">
                        <a href="/evento/creat" class="nav-link"> Criar Evento</a>
                     </li>
                     @auth
                     <li class="nav-item">
                       <a href="/dashboard" class="nav-link">Meus eventos</a>
                     </li>
                     <li class="nav-item">
                       <form action="/logout" method="POST">
                         @csrf
                         <a href="/logout"
                           class="nav-link"
                           onclick="event.preventDefault();
                           this.closest('form').submit();">
                           Sair
                         </a>
                       </form>
                     </li>
                     @endauth
                     @guest
                     <li class="nav-item">
                       <a href="/login" class="nav-link">Entrar</a>
                     </li>
                     <li class="nav-item">
                       <a href="/register" class="nav-link">Cadastrar</a>
                     </li>
                     @endguest
                </ul>
                </div>
            </nav>
        </header>
        {{-- definindo nome do corpo --}}
        <main>
            <div class="container-fluid">
                <div class="row">
                    @if (session('msg'))
                        <p class="msg"> {{session('msg')}} </p>
                    @endif

                    @if (session('msgErro'))
                        <p class="msgErro"> {{session('msgErro')}} </p>
                    @endif

                    @if (session('campoVazio'))
                    <p class="msgErro"> {{session('campoVazio')}} </p>
                    @endif

                    @yield('content')
                </div>
            </div>
        </main>

        <footer>
            <p> HDC ennvent &copy; 2021</p>
        </footer>
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
        <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    </body>
</html>
