<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/main.css">
    <title>Speed Tickets</title>
    <link rel="icon" href="image/logonoirvert.png" type="favicon">
    <meta charset="utf-8">
</head>

<body class="body-register">
    <header>
            
        <h1 class="title-name">Speed ticket</h1>
        <img src="image/logonoirvert.png" height="50px" width="50px" alt="">

        <div class="header-links">
        <nav>
            <ul class="nav_links">
                <li><a class="a-links" href="menu">Menu</a></li>  
            </ul>
        </nav>
    </header>
    <main>
        <div class="Register-box">
            <h1 class="h1-register">Register</h1>
            <h4 class="h4-register">One step closer to book your dream</h4>
            @if ($errors->any())
                <div class="alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="register" method="POST">
                @csrf
                <label>Username</label>
                <input type="text" name='username' placeholder="">
                <label>Email</label>
                <input type="email" name="email" placeholder="">
                <label>Password</label>
                <input type="password" name="password" placeholder="">
                <label>Confirm Password</label>
                <input type="password" name="password_confirmation" placeholder="">
                <button class="button-register" type="submit" value="Submit">Submit</button>
            </form>
        </div>
        <p class="paragraph">Already have an account ? <a class="login-page" href="login">Login here</a>
        </p>
    </main>
    <footer class="footer-register">

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
