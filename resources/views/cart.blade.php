<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/cart.css">
    <title>Speed Tickets</title>
    <link rel="icon" href="image/logonoirvert.png" type="favicon">
    <meta charset="utf-8">
</head>

<body class="body-cart">
    <header>

        <h1 class="title-name">Speed ticket</h1>
        <img src="../image/logonoirvert.png" height="50px" width="50px" alt="">
        <div class="header-link">
            <nav>
                <ul class="nav_links">
                    <li class="countItem"></li>
                    <li><a href="../cart"><img src="../image/panierlogo.png" height="50px" width="50px" alt=""></a></li>
                </ul>
            </nav>
        </div>
        <div class="header-links">
            <nav>
                <ul class="nav_links">

                    <li><a class="a-links" href="../menu">Menu</a></li>
                    <li><a class="a-links">{{ Auth::user()->username }}</a></li>
                    <li><a class="a-links" href="{{ url('logout') }}">Disconnection</li></a>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="cadre">
            <br>
            <h1 class="login"> Cart </h1><br>
            <table class="table">
                <thead>
                    <th class="td">Product title</th>
                    <th class="td">Quantity</th>
                    <th class="td">Price</th>
                    <th class="td">Delete</th>
                </thead>
                <tbody class="tablecart" id="cartbody"></tbody>
            </table>
            <br><br>

            <form class="form-admin" onsubmit="return false">
                @csrf
                <button class = "botton-order" onclick="validatecart()"> To ordre </button>
            </form>
        </div>
    </main>
    <footer class="footer-cart">

        <div class="reseaux">
            <div>
                <a href="www.facebook.com/MotoGP/" target="_blank" class="facebook"> <img
                        src="image/icons8-facebook-30.png" class="img-top" alt=""></a>
            </div>
            <div>
                <a href="twitter.com/MotoGP?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"
                    class="Instagram"><img src="image/icons8-twitter-50.png" class="img-top" alt=""></a>
            </div>
        </div>

    </footer>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="/js/cart.js"></script>
<script>
    displaycart()
</script>

</html>
