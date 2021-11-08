<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio website Rick - @yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" href="images/logo.png">
</head>
<body>

<header>
        <nav>

                <div class="logo"> 
                    <a href="/en/home">
                        <img src="/images/logo.png" alt="logo"></div>
                    </a>


                <div class="@yield('home')home">
                        <a href="/en/home"><h3>home</h3></a>
                </div>
                <div class="@yield('projecten')dropmenu">
                    <div class="drop">
                        <a href="/en/projects"><h3>projects</h3></a>  
                        <ul class="dropdown"> 
                            <li>
                                <a href="/en/projects/this-website">this website</a>
                            </li>
                        </ul>
                    </div>
                  
                </div>
                <div class="@yield('overmij')overmij">
                    <a href="/en/about"><h3>about</h3></a>
                </div>

                <div class=taal>

                <a href="@yield('taal')">
                    <img src="/images/nl.png" alt="">
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