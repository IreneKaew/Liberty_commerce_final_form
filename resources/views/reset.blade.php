<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/main.css">
    <title>Speed Tickets</title>
    <link rel="icon" href="image/stlogo.jpg" type="favicon">
    <meta charset="utf-8">

</head>

<body class=body-forgotpassword>
    <header>
        <div class="haut">
            <div>
                <h1 class="width-deco">Speed ticket</h1>
            </div>
            <div class="logo">
                <img src="image/logonoirvert.png" height="50px" width="50px" alt="">
            </div>
        </div>
    </header>

    <main>
        <div class="reset-box">
            <form action="reset" method="POST" class="form-wrap">
                @csrf
                <h1 class="h1-reset">Forgot Password</h1>
                <h4 class="h4-reset">Once you click on send, you will receive an email to reset your password</h4>
                <div class="form-box">
                    <input type="text" placeholder="Enter your email" />
                </div>
            </form>
            <form action="/login">
                <button class="button" value="Send">Send</button><br><br>
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
