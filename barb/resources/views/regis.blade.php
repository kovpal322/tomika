<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./regis.css">
  <title>Regisztráció</title>
</head>
<body>
  <form action="/regisztracio_feldolgozas" method="post">
    <h2>Regisztráció</h2>
    <input type="text" name="felhasznalonev" placeholder="Felhasználónév" required>
    <input type="email" name="email" placeholder="E-mail cím" required>
    <input type="password" name="jelszo" placeholder="Jelszó" required>
    <input type="submit" value="Regisztráció">
  </form>
</body>
</html>
