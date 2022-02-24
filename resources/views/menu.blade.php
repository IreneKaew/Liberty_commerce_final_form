<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/menu.css">
    <title>Speed Tickets</title>
    <link rel="icon" href="image/logonoirvert.png" type="favicon">
    <meta charset="utf-8">
</head>

<body class="body-menu">
    <header>

        <h1 class="title-name">Speed ticket</h1>
        <img src="image/logonoirvert.png" height="50px" width="50px" alt="">

        <div class="header-links">
            <nav>
                <ul class="nav_links">
                    <li><a class="a-links" href="menu">Menu</a></li>
                    <li><a class="a-links">{{ Auth::user()->username }}</a></li>
                    <li><a class="a-links" href="{{ url('logout') }}">Disconnection</li></a>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="cadre-menu">

            <br>
            <h1 class="login"> Menu </h1>
            <br>
            <form class=form-menu></form>
            <a href="catalog"><input class="bouton-menu" type="button" value="Catalog"></a><br><br><br>
            <a href="cart"><input class="bouton-menu" type="button" value="Cart"></a><br><br><br>
            @php
                $admin = auth()->user()->admin;
            @endphp
            @if ($admin == 1)
                <a href="admin"><input class="bouton-menu" type="button" value="Admin"></a><br><br><br>
            @endif


        </div>

    </main>
    <footer class="footer-menu">

        <div class="reseaux">
            <div>
                <a href="https://www.facebook.com/MotoGP/" target="_blank" class="facebook"><img
                        src="image/icons8-facebook-30.png" class="img-top" alt=""></a>
            </div>
            <div>
                <a href="https://twitter.com/MotoGP?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"
                    target="_blank" class="Instagram"><img src="image/icons8-twitter-50.png" class="img-top"
                        alt=""></a>
            </div>
        </div>

    </footer>
</body>

</html>
