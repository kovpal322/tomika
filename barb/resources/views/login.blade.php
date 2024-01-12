<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form>
                <h1>Fiók létrehozása</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>vagy használd az emailed a regisztrációhoz</span>
                <input type="text" placeholder="Név">
                <input type="E-mail Cím vagy telefonszám" placeholder="E-mail Cím vagy telefonszám">
                <input type="Jelszó" placeholder="Jelszó">
                <button>Regisztráció</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form>
                <h1>Bejelentkezés</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>vagy használd az email jelszód</span>
                <input type="E-mail Cím vagy telefonszám" placeholder="E-mail Cím vagy telefonszám">
                <input type="Jelszó" placeholder="Jelszó">
                <a href="#">Elfelejtette a Jelszavát?</a>
                <button>Bejelentkezés</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Üdv újra!</h1>
                    <p>Adja meg személyes adatait a webhely összes funkciójának használatához</p>
                    <button class="hidden" id="login">Bejelentkezéss</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Üdvözöljük!</h1>
                  <p>Adja meg személyes adatait a webhely összes funkciójának használatához</p>
                    <button class="hidden" id="register">Regisztráció</button>
                </div>
            </div>
        </div>
    </div>

    <script src="login.js"></script>
</body>

</html>