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
   <h2>Çanakkale Teknik Bilimler - MYO</h2>
</header>
<nav>
    <ul>
        <li><a href="/"><h3>Ana sayfa</h3></a></li>
        <li><a href="/contact"><h3>İletişim</h3></a></li>
        <li><a href="/about"><h3>Hakkımızda</h3></a></li>
    </ul>
</nav>
<main>
    @yield('main')
</main>
<footer>
    <h4> Copyright &copy; 2024 - Çanakkale Teknik Bilimler </h4>
</footer>
 <div class="bottom-message"></div>
@yield('bottom-message')
</body>
</html>
