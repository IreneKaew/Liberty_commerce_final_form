<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/admin.css">
    <title>Speed Tickets</title>
    <link rel="icon" href="image/logonoirvert.png" type="favicon">
    <meta charset="utf-8">
</head>

<body class="body-admin">
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
        <div class="cadre-admin">
            <br>
            <h1 class="login"> New Product </h1>
            <form action="newproduct" method="POST" enctype="multipart/form-data">
                @csrf
                <label class="label-admin" for="fname"> Product title:</label>
                <input type="text" name="title">
                <label class="label-admin" for="fname"> Product Image:</label>
                <input class="fname" type="file" name="image">
                <label class="label-admin" for="fname"> Circuit title:</label>
                <input type="text" name="titlecircuit">
                <label class="label-admin" for="fname"> Circuit Image:</label>
                <input class="fname" type="file" name="imagecircuit">
                <label class="label-admin" for="fname"> Product Description:</label>
                <input class="descrip" type="text" name="descrip">
                <label class="label-admin" for="fname"> Price:</label>
                <input type="text" id="email" name="price">
                <label class="label-admin" for="fname"> Stock</label>
                <input type="text" id="email" name="stock">
                <a><button class="button-admin" type="submit" value="create new product">Create new
                        product</button></a>
            </form>
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
</body>

</html>
