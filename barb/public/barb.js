const galleryButton= document.querySelector('a[href="#gallery-section"]');

galleryButton.addEventListener('click', function(event) {
  event.preventDefault();
  const gallerySection = document.getElementById('gallery-section');
  gallerySection.scrollIntoView({ behavior: 'smooth' });
});

const contactButton = document.querySelector('a[href="#contact-section"]');

console.log(contactButton);

contactButton.addEventListener('click', function(event) {
  event.preventDefault();
  const contactSection = document.getElementById('contact-section');
  console.log(contactSection);
  
  contactSection.scrollIntoView({ behavior: 'smooth' });
});


const priceListButton = document.querySelector('a[href="#price-list-section"]');


console.log(priceListButton);


priceListButton.addEventListener('click', function(event) {
  event.preventDefault();
  
 
  const priceListSection = document.getElementById('price-list-section');
  console.log(priceListSection);
  
  priceListSection.scrollIntoView({ behavior: 'smooth' });
});

const homeButton = document.querySelector('a[href=""]');


console.log(homeButton);

homeButton.addEventListener('click', function(event) {
  event.preventDefault();

  window.scrollTo({ top: 0, behavior: 'smooth' });
  
  // Késleltetett idő után újratöltés
  setTimeout(function() {
    window.location.reload();
  }, 1000); // 1000ms (1 másodperc) késleltetés az újratöltéshez, így az animáció megjelenhet
});

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

