<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/catalog.css">
    <title>Speed Tickets</title>
    <link rel="icon" href="image/logonoirvert.png" type="favicon">
    <meta charset="utf-8">
</head>

<body class="body-catalogue">
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

    <main class="main-catalog">
        <h1 class="h1-catalogue">Tickets Available</h1><br>
        <div class="catalogue-box">

            <!-- <div class="row-catalogue"> -->
            @foreach ($products as $product)

                <div class="colum-catalogue">
                    <img src="{{ asset('storage/image/' . $product->image) }}">
                    <h3 class = "h3-catalog">{{ $product->title }}</h3>
                    <p class = "p-catalog">{{ $product->price }}€</p>
                    <a href="{{ url('productpage', ['id' => $product->id]) }}"><button type="button"
                            class="botton-buynow">BUY NOW</button></a><br>
                            <button
                            onclick="addtocart({{ $product->id }},'{{ $product->title }}',{{ $product->price }})"
                            type="Submit" class="botton-buynow">ADD TO CART</button>
                    <form onsubmit="return false">
                        @csrf
                        <input type="hidden" id="quantity" value="1">
    
                    </form>
                </div>
            @endforeach
        </div>

    </main>

    <footer>

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

    </div>

</body>
<script src="/js/cart.js"></script>

</html>
