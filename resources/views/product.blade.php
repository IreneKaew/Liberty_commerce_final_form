<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/product.css">
    <title>Speed Tickets</title>
    <link rel="icon" href="../image/logonoirvert.png" type="favicon">
    <meta charset="utf-8">
</head>

<body class="body-product">
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

        <div class="produit-box">
            <div class="culum-product">
                <img class="imgFr-f1" src="{{ asset('storage/image/' . $product->imagecircuit) }}">
            </div>
            <div class="culum-product">
                <p class="p-product">{{ $product->title }}</p>
                <h1 class="h1-product">{{ $product->titlecircuit }}</h1>
                <h2 class="h2-product-stock">{{ $product->stock }} Tickets Available</h2>
                <h4 class="h4-product-prix">{{ $product->price }}€</h4>
                <h3 class="h3-product-tickets">Tickets Description</h3>
                <h4 class="h4-product-descr">{{ $product->descrip }}</h4>
                <form <form onsubmit="return false">
                    @csrf
                    <input type="hidden" id="quantity" value="1">
                    <button
                        onclick="addtocart({{ $product->id }},'{{ $product->title }}',{{ $product->price }})"
                        type="submit" class="botton-select">SELECT</button>
                </form>
            </div>
        </div>


        {{-- to modify --}}

        @php
            $admin = auth()->user()->admin;
        @endphp
        @if ($admin == 1)
            <div class="newinfo-box">
                <form class="form-newinfo" action="{{ url('product') }}" method="POST">
                    @csrf
                    <h3 class=product-page-title>Modify product's informations</h3>
                    <input type="hidden" value="{{ $product->id }}" name="product_id">
                    <label class="product-page">New Title of Product</label>
                    <input type="text" name="title" placeholder="">
                    <label class="product-page">New Title of Circuit</label>
                    <input type="text" name="title_circuit" placeholder="">
                    <label class="product-page">New Description</label>
                    <input type="text" name="description" placeholder="">
                    <h4 class="h4-product-add">Add Stock</h4>
                    <div class="product-add-increment">
                        <input type="number" min="0" value="0" name="stock">
                    </div>

                    <button class="button-confirm" type="submit" value="Submit">CONFIRM</button>
                </form>
            </div>
        @endif

    </main>

    <footer>

        <div class="reseaux">
            <div>
                <a href="https://www.facebook.com/MotoGP/" target="_blank" class="facebook"><img
                        src="../image/icons8-facebook-30.png" class="img-top" alt=""></a>
            </div>
            <div>
                <a href="https://twitter.com/MotoGP?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"
                    target="_blank" class="Instagram"><img src="../image/icons8-twitter-50.png"
                        class="img-top" alt=""></a>
            </div>
        </div>

    </footer>

</body>
<script src="/js/cart.js"></script>
</html>
