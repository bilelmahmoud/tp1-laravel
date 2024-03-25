<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Bare - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        
    </head>
    <body class="d-flex flex-column h-100">

        @php $locale = session()->get('locale'); @endphp
        <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Maisonneuve</a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    Anis Elbez
<li class="nav-item"><a href="" class="nav-link">@lang('lang.text_hello') @if(Auth::check()) {{ Auth::user()->name }} @else @lang('lang.guest') @endif</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('etudiant.index') }}">@lang("lang.menu_accueil")</a></li>
                        <li><a class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('etudiant.create')}}">registration</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('article.index') }}">@lang("lang.text_article")</a></li>
                        <li><a class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('article.create') }}">@lang("lang.text_add_article")</a></li>
                        

                        <ul class="navbar-nav  mb-2 mb-sm-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">@lang("lang.text_langue")</a> 
                        <ul class="dropdown-menu">
                             <li><a class="dropdown-item" href="{{ route('lang', 'en') }}">@lang('English')</a></li>
                             <li><a class="dropdown-item" href="{{ route('lang', 'fr') }}">@lang('French')</a></li>
                        </ul>
                        </li>

                        <li class="nav-item">

                            @guest

                            <a class="nav-link" href="{{route('login')}}">@lang("lang.text_connexion")</a> 

                            @else
                            
                            <a class="nav-link" href="{{route('logout')}}">@lang("lang.text_deconnexion")</a>

                            @endguest
                        </li>
                    </ul>
                        
                </div>
            </div>
        </nav>
</header>
        <div class="container my-5">
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
        <!-- Content -->
        @yield('content')

        <!-- <footer class="footer mt-auto py-2 bg-dark text-white">
        <div class="container text-center">
            &copy; {{ date('Y')}} {{config('app.name') }}. All Rights Reserved
        </div>

        </footer> -->
    
</body>
   <!-- Bootstrap core JS-->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
</html>