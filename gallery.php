<?php include ('includes/config.php');
  $page_title = "Gallery";
  $page_description = "Flavour, Mood, and Memory";
  $current = "c_gallery";
?>

<!DOCTYPE html>
<html lang="en">

  <head>
      <?php include ('includes/head.php');?>
      <link rel="stylesheet" href="assets/css/gallery.css">
  </head>
  
  <body class = <?php echo $current; ?>>
    <div class="hero-image">
      <!-- Navigation -->
      <?php include ('includes/nav.php');?>

      <div class="mwrapper">
        <!-- Header -->
        <?php include ('includes/header.php');?>

        <section class="gallery">
          <figure class="card">
            <img src="assets/images/pexels-t-n-g-u-y-e-n-🍁-699953.jpg" alt="Seafood Noodles">
            <figcaption> 
              <h1>Seafood Noodles</h1>
              <h2>Seafood Noodles with Shrimp</h2>
              <a href="https://www.pexels.com/photo/cooked-seafoods-699953/" alt="T - N G U Y E N">T - N G U Y E N</a>
            </figcaption>
          </figure>
          <figure class="card">
            <img src="assets/images/pexels-daria-shevtsova-704569.jpg" alt="Egg Toast">
            <figcaption> 
              <h1>Egg Toast</h1>
              <h2>Golden Toast with Eggs</h2>
              <a href="https://www.pexels.com/photo/cooked-food-704569/" alt="Daria Shevtsova">Daria Shevtsova</a>
            </figcaption>
          </figure>
          <figure class="card">
            <img src="assets/images/pexels-kei-scampa-5514819.jpg" alt="Yellow Food">
            <figcaption> 
              <h1>Yellow Food</h1>
              <h2>Yellow Food With Green Relish</h2>
              <a href="https://www.pexels.com/photo/plate-of-yellow-food-with-green-relish-2297961/" alt="Brett Jordan">Brett Jordan</a>
            </figcaption>
          </figure>
          <figure class="card">
            <img src="assets/images/pexels-kei-scampa-5514819.jpg" alt="Green Salad">
            <figcaption> 
              <h1>Green Salad</h1>
              <h2>Fresh Vegetable Salad</h2>
              <a href="https://www.pexels.com/photo/food-plate-salad-healthy-5514819/" alt="Kei Scampa">Kei Scampa</a>
            </figcaption>
          </figure>
          <figure class="card">
            <img src="assets/images/pexels-kei-scampa-5514818.jpg" alt="Corn and Beans">
            <figcaption> 
              <h1>Corn and Beans</h1>
              <h2>Healthy Corn and Beans Salad</h2>
              <a href="https://www.pexels.com/photo/food-healthy-dry-corn-5514818/" alt="Kei Scampa">Kei Scampa</a>
            </figcaption>
          </figure>
          <figure class="card">
            <img src="assets/images/pexels-becerra-govea-5774008.jpg" alt="Bulgogi with Rice">
            <figcaption> 
              <h1>Bulgogi with Rice</h1>
              <h2>Bulgogi Rice with Vegetables</h2>
              <a href="https://www.pexels.com/photo/food-wood-dry-dinner-5774008/" alt="Becerra Govea">Becerra Govea</a>
            </figcaption>
          </figure>
          <figure class="card">
            <img src="assets/images/pexels-becerra-govea-5773968.jpg" alt="Bibimbap">
            <figcaption> 
              <h1>Bibimbap</h1>
              <h2>Bibimbap with Vegetables and Eggs</h2>
              <a href="https://www.pexels.com/photo/green-vegetable-on-white-ceramic-plate-5773968/" alt="Becerra Govea">Becerra Govea</a>
            </figcaption>
          </figure>
          <figure class="card">
            <img src="assets/images/pexels-lumn-1410236.jpg" alt="Fried Rice">
            <figcaption> 
              <h1>Fried Rice</h1>
              <h2>Rice with Egg, Zucchini, and Celery</h2>
              <a href="https://www.pexels.com/photo/pexels-jer-chung-original" alt="Lum3n">Lum3n</a>
            </figcaption>
          </figure>
          <figure class="card">
            <img src="assets/images/pexels-becerra-govea-5773964.jpg" alt="Spicy Chicken">
            <figcaption> 
              <h1>Spicy Chicken</h1>
              <h2>Spicy Seasoned Fried Chicken</h2>
              <a href="https://www.pexels.com/photo/food-plate-healthy-restaurant-5773964" alt="Becerra Govea">Becerra Govea</a>
            </figcaption>
          </figure>
        </section>  
      </div>

      <!--- footer ------------------------------------------------------------>
      <?php include ('includes/footer.php');?>
    </div>
    <script type="text/JavaScript" src="assets/js/menu.js"></script>  
  </body>
</html>

