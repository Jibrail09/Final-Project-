<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
  <title>Delicious Milk Tea Shop</title>
  <link rel="stylesheet" type="text/css" href="style.css">
    <script src="main.js"></script>
</head>
<body>
  <header>
    <nav>
   <label class="logo">POGI'S ITEA SHOP</label>
   <ul>
     <li><a href="#about">About</a></li>
     <li><a href="#locations">Locations</a></li>
     <li><a href="#services">Services</a></li>
     <li><a href="#contact">Contact</a></li>
     <li><a href="xampp1\htdocs\New file html\index.php">Home</a></li>
      </ul>
    </nav>
  </header>

  <section id="banner">
    <h1>Welcome to Delicious Milk Tea Shop</h1>
    <p>Indulge in the finest milk tea flavors</p>
    <a href="#menu" class="button">View Menu</a>
  </section>

<section id="menu">
  <div class="container">
    <h2>Our Menu</h2>
    <div class="menu-slider">
      <div class="menu-item">
        <img src="Taro-removebg-preview.png" alt="Milk Tea 1">
        <h3>Taro Milk Tea</h3>
        <p>Taro milk tea is a popular beverage that combines the flavors of taro root with milk and tea. Here are the definitions of the main ingredients typically used in taro milk tea.</p>
        <button class="buy-button">Buy</button>
      </div>
      <div class="menu-item">
        <img src="RED-removebg-preview.png" alt="Milk Tea 2">
        <h3>Red Velvet Milk Tea</h3>
        <p>Red velvet bubble milk tea that features a base made from tea, red velvet, milk and chewy pearls at the bottom of the cup. Fans of red velvet will surely enjoy this sweet, cool refreshing and delicious treat.</p>
        <button class="buy-button">Buy</button>
      </div>
      <div class="menu-item">
        <img src="Okinawa-removebg-preview.png" alt="Milk Tea 3">
        <h3>Okinawa Milk Tea</h3>
        <p>Okinawa milk tea is a tasty blend of black tea, milk, and sweetener. Okinawa milk tea gets its unique taste from the Okinawa brown sugar that's used to sweeten the tea.</p>
        <button class="buy-button">Buy</button>
      </div>
    
      <div class="menu-item">
        <img src="spreso.png" alt="Milk Tea 1">
        <h3>Espresso Coffee</h3>
        <p>It's a process of brewing coffee and is instead made by forcing high-pressured hot water through very finely ground coffee beans.</p>
        <button class="buy-button">Buy</button>
      </div>
      
       <div class="menu-item">
       <img src="latte.png" alt="Milk Tea 1">
        <h3>Latte Coffee</h3>
        <p>a single or double shot of espresso. This espresso is then combined with several ounces of steamed milk to create a rich, creamy beverage that has a more subtle espresso taste.</p>
        <button class="buy-button">Buy</button>
      </div>

      <div class="menu-item">
        <img src="ameriacno.png" alt="Milk Tea 1">
        <h3>Caffe Americano</h3>
        <p>A Café Americano, or what we just call an Americano, combines freshly pulled shots of espresso with hot water to achieve the size of a standard cup of brewed coffee.</p>
        <button class="buy-button">Buy</button>
      </div>

      <div class="menu-item">
        <img src="caramel.png" alt="Milk Tea 1">
        <h3>Caramel Macchiato</h3>
        <p>It is made with vanilla syrup, steamed milk, espresso, and caramel sauce. The espresso is poured on top of the milk leaving a dark mark on top of the milk foam ("macchiato" means "marked" in Italian).</p>
        <button class="buy-button">Buy</button>
      </div>

      <div class="menu-item">
        <img src="bread2.png" alt="Milk Tea 1">
        <h3>Bagguette</h3>
        <p>Baguettes are characterized by a crisp crust and chewy texture inside. Typically, a baguette has a diameter of 5.0–7.6 cm (2–3 inches), and a length of 60–70 cm (2.0–2.4 feet).</p>
        <button class="buy-button">Buy</button>
      </div>

      <div class="menu-item">
        <img src="bread3.png" alt="Milk Tea 1">
        <h3>White Bread</h3>
        <p>White bread typically refers to breads made from wheat flour from which the bran and the germ layers have been removed from the whole wheatberry as part of the flour grinding or milling process, producing a light-colored flour.</p>
        <button class="buy-button">Buy</button>
      </div>

      <div class="menu-item">
        <img src="bread1.png" alt="Milk Tea 1">
        <h3>Pumpernickel Bread</h3>
        <p>Pumpernickel bread is slightly sweet, coarse and heavy rye bread made from soaked cracked rye grain using rye sourdough starter and a small amount of wholemeal rye flour.</p>
        <button class="buy-button">Buy</button>
      </div>

      <div class="menu-item">
        <img src="nigga.png" alt="Milk Tea 1">
        <h3>Rye Bread</h3>
        <p>Rye bread is a type of bread made with various proportions of flour from rye grain. It can be light or dark in color, depending on the type of flour used and the addition of coloring agents, and is typically denser than bread made from wheat flour.</p>
        <button class="buy-button">Buy</button>
      </div>
      <!-- Add more menu items here -->
    </div>
    <div class="slider-controls">
      <button class="prev-button" onclick="slideMenu('prev')">Previous</button>
      <button class="next-button" onclick="slideMenu('next')">Next</button>
    </div>
  </div>
  <script>
    function slideMenu(direction) {
  const menuSlider = document.querySelector('.menu-slider');
  const scrollAmount = 300;
  const scrollDuration = 300;

  if (direction === 'prev') {
    menuSlider.scrollBy({
      left: -scrollAmount,
      behavior: 'smooth',
    });
  } else if (direction === 'next') {
    menuSlider.scrollBy({
      left: scrollAmount,
      behavior: 'smooth',
    });
  }
}
  </script>
</section>

  <section id="about">
    <div class="container">
      <h2>About Us</h2>
      <img src="lolo mo.jpg" alt="About Image">
      <p>At Delicious Milk Tea Shop, we are passionate about serving the most flavorful and refreshing milk teas in town. Our handcrafted beverages are made with the highest quality ingredients and brewed to perfection. We believe in offering a memorable experience to our customers with every sip.</p>
    </div>
  </section>

  <section id="locations">
    <div class="container">
      <h2>Our Locations</h2>
      <img src="shop.jpg" alt="Locations Image">
      <p>We have several conveniently located shops where you can enjoy our delicious milk teas. Find the nearest one below:</p>
      <ul>
        <li><strong>City Center:</strong> 123 Main Street</li>
        <li><strong>Westside Mall:</strong> 456 Oak Avenue</li>
        <li><strong>North Square:</strong> 789 Elm Drive</li>
      </ul>
    </div>
  </section>
  
<section id="services">
      <h2>Our Services</h2>
      <div class="services-container">
      <div class="service">
        <img src="customise options.jpg" alt="Service 1">
        <h3>Customizable Options</h3>
        <p>We offer a wide range of customization options, allowing you to create your perfect milk tea. Choose your tea base, sweetness level, toppings, and more!</p>
      </div>
      <div class="service">
        <img src="service.jpg" alt="Service 2">
        <h3>Quality Ingredients</h3>
        <p>We carefully select the finest tea leaves and ingredients to ensure the highest quality and taste in every cup of milk tea we serve.</p>
      </div>
      <div class="service">
        <img src="friend.jpg" alt="Service 3">
        <h3>Quick and Friendly Service</h3>
        <p>Our dedicated team is committed to providing fast and friendly service, ensuring that you have a pleasant and enjoyable visit every time.</p>
      </div>
    </div>
  </section>


  <section id="contact">
    <div class="container">
      <h2>Contact Us</h2>
      <p>Have a question or feedback? We'd love to hear from you. Fill out the form below, and we'll get back to you as soon as possible.</p>
      <form>
        <input type="text" placeholder="Name">
        <input type="email" placeholder="Email">
        <textarea placeholder="Message"></textarea>
        <button type="submit" class="button">Submit</button>
      </form>
    </div>
  </section>

  <footer>
    <div class="container">
      <p>&copy; 2023 Delicious Milk Tea Shop. All rights reserved.</p>
    </div>
  </footer>

</body>

</html>