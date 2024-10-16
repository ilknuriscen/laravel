<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type = "text/css">
        body{
            font-family: Arial, Helvetica, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 0;
            background-color: bisque;
        }
        header, footer{
            background-color: cornflowerblue;
            text-align: center;

        }
        main{
            padding: 2em;
            justify-content: center;
        }
        nav ul{
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
            border: 2px solid black; /* Çerçeve ekler */
            padding: 10px; /* Çerçevenin içine boşluk ekler */
            background-color: #f0f0f0; /* Arka plan rengi */
            border-radius: 10px; /* Kenarları yuvarlatır */
        }
        nav ul li{
            margin: 0 1em;
        }
    </style>
</head>
<body>
<header>
    Çanakkale Teknik Bilimler - MYO
</header>
<nav>
    <ul>
        <li><a href="/">Ana sayfa</a></li>
        <li><a href="/contact">İletişim</a></li>
        <li><a href="/about">Hakkimizda</a></li>
    </ul>
</nav>
<main>
    @yield('main')
</main>
<footer>
    Copyright &copy; 2024 - Çanakkale teknik bilimler
</footer>
 <div class="bottom-message"></div>
@yield('bottom-message')
</body>
</html>
