<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio website Rick - @yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" href="images/logo.png">
</head>
<body>
<header>
        <nav>
                <div class="logo"> 
                    
                    <a href="/">
                        <img src="/images/logo.png" alt="logo"></div>
                    </a>


                <div class="@yield('home')home">
                        <a href="/"><h3>home</h3></a>
                </div>
                <div class="@yield('projecten')dropmenu">
                    <div class="drop">
                        <a href="/projecten"><h3>projecten</h3></a>  
                        <ul class="dropdown"> 
                            <li>
                                <a href="/projecten/deze-website">Deze website</a>
                            </li>
                        </ul>
                    </div>
                  
                </div>
                <div class="@yield('overmij')overmij">
                    <a href="/overmij"><h3>overmij</h3></a>
                </div>

                <div class=taal>

                <a href="@yield('taal')">
                <img src="/images/uk.png" alt="">
                </a>
                </div>
        </nav>
    </header>

@yield('body')


<footer>
    <div id="copyright">
        Created by Rick van Assen. © 2021
    </div>
</footer>

</body>
</html>
