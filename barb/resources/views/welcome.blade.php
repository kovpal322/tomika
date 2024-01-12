<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./barb.css">
    <script src="./barb.js" defer></script>
    <title>Barber Shop Budapest</title>
</head>
    <header>
        <div class="title"></p>Barber Shop Budapest</p></div>
      <div class="navbar">

        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="#price-list-section">Árlista</a></li>
            <li><a href="#contact-section">Kapcsolat</a></li>
            <li><a href="#gallery-section">Galéria</a></li>
            <li><a href="login">Bejelentkezés</a></li>
        </ul>
      </div>
    </header>


<body>
  <video id="background-video" autoplay loop muted poster="phot/A Cinematic Barbershop Commercial - Sony FX3.mp4">
    <source src="phot/A Cinematic Barbershop Commercial - Sony FX3.mp4" type="video/mp4">
    </video>
    

    <div class="container">
        <div class="slides">
<h1>Üdvözöljük a Barber Shop Budapestben!</h1>

<a href="idop.html">
  <button>Időpontfoglalás</button>
</a>
</div>

<div class="slides1" id="price-list-section">
        <img src="phot/1621596228_192ec53f4d25f6e05b4c90388e58fba1.jpg">
        <table border="1" id="price-table">
            <!-- A táblázatot most már üresen hagyjuk, majd JavaScripttel töltjük fel. -->
        </table>
    </div>


    <div class="slides3" id="gallery-section">
      <div class="galeria">
      <h2>Galéria</h2>
      </div>
      <p><img src="phot/Top 100 Best Haircuts For Men In 2021.jpg" alt=""></p>
      <p><img src="" alt=""></p>
      <p><img src="" alt=""></p>
    </div>


    <div class="slides0" id="contact-section">

      <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2695.1213824386364!2d19.069226276519487!3d47.50702727118083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741dc6ecc2d2bb9%3A0x328371a2dc55baa6!2sBudapest%2C%20Kir%C3%A1ly%20u.!5e0!3m2!1shu!2shu!4v1700058523311!5m2!1shu!2shu" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
    <h2>Elérhetőség</h2>
    <p>Cím: Király utca 123, Budapest</p>
    <p>Telefon: +36 20 399 4475</p>
    <p>Email: info@barbershopbudapest.hu</p>
    </div>

</div>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    // Árak lekérdezése
    fetch('get_prices.php')
        .then(response => response.json())
        .then(prices => {
            // Táblázat elem referenciája
            const table = document.querySelector('#price-list-section table');

            // Árak hozzáadása a táblázathoz
            prices.forEach(price => {
                const row = table.insertRow(-1);
                const cell1 = row.insertCell(0);
                const cell2 = row.insertCell(1);

                cell1.textContent = price.style;
                cell2.textContent = price.price + ' Ft';
            });
        })
        .catch(error => console.error('Hiba:', error));
});

</script>
<footer>
    <p>&copy; 2023 Barber Shop Budapest. Minden jog fenntartva.</p>
</footer>
</body>
</html>
