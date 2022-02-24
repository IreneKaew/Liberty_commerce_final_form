<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/main.css">
    <title>Speed Tickets</title>
    <link rel="icon" href="image/logonoirvert.png" type="favicon">
    <meta charset="utf-8">
</head>

<body class="body-signin">
    <header>

        <h1 class="title-name">Speed ticket</h1>
        <img src="image/logonoirvert.png" height="50px" width="50px" alt="">

        <div class="header-links">

    </header>
    <main>
        <div class="font-cookie">
            <div class="cookie">
                <br>
                <div class="imgcookie">
                    <img src="image/logonoirvert.png" height="100px" width="100px" alt="">
                </div>
                <br><br>
                <h1 class="h1-cookie">Dude, if you feel like buying your ticket, you might consider creating your
                    account first.
                </h1>
                <div class="accept-cookie">
                    <button class="button-cookie" onclick="acceptcookie()">Accept cookies</button>
                </div>

            </div>
        </div>
        <div class="cadre">
            <br>
            <h1 class="login"> Login </h1>
            <p class="p-login">Sign in to purchase your tickets</p>
            <p class="labe">If not, be sure to register to be able to reserve your tickets</p>
            @if ($errors->any())<p class="error">{{ $errors->first() }}</p>@endif

            <form action="login" method="POST">
                @csrf
                <label for="fname"> Email:</label>
                <input type="text" id="email" name="email"><br>
                <label for="fname"> Password:</label>
                <input type="password" id="email" name="password"><br><br>
                <button class="button-login" type="submit" value="Sign In">Sign In</button><br>
            </form>
            <form action="/reset" method="GET">
                <button class="button-login" value="Forget my password">Forget my password</button><br>
            </form>
            <form action="/register">
                <button class="button-login" value="Sign Up">Sign Up</button><br><br>
            </form>
        </div>
    </main>
    <footer class="footer-login">

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
<script src="/js/cookie.js"></script>

</html>
