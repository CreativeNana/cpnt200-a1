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
  
  <body class=<%= current %>>
    <div class="hero-image">
      <!-- Navigation -->
      <?php include ('includes/nav.php');?>

      <div class="mwrapper">
        <!-- Header -->
        <?php include ('includes/header.php');?>

       <section>
        <div class="flex_wrap">
          <figure class="flex_wrap_item" >
            <img src="assets/images/pexels-steve-3789885.jpg" alt="Food menu1">
            <figcaption>[Menu] Bibimbap </figcaption>
          </figure>
          <figure class="flex_wrap_item" >
            <img src="assets/images/pexels-jer-chung-original.jpg" alt="Food menu2">
            <figcaption>[Menu] fried rice with vegetables </figcaption>
          </figure>
          <figure class="flex_wrap_item" >
            <img src="assets/images/pexels-pixabay-262897.jpg" alt="Food menu3">
            <figcaption>[Menu] Stir-fried Pork with Onion </figcaption>
          </figure>
          <figure class="flex_wrap_item" >
            <img src="assets/images/pexels-jer-chung2-original.jpg" alt="Food menu4">
            <figcaption>[Menu] Shrimp asparagus seasoned  </figcaption>
          </figure>
          <figure class="flex_wrap_item" >
            <img src="assets/images/pexels-cottonbro-4057693.jpg" alt="Event1">
            <figcaption>[Events] Conversation with the Chef </figcaption>
          </figure>
          <figure class="flex_wrap_item" >
            <img src="assets/images/pexels-artem-beliaikin-1091778.jpg" alt="Events2">
            <figcaption>[Events] Color of food: Red </figcaption>
          </figure>
          <figure class="flex_wrap_item" >
            <img src="assets/images/pexels-karolina-grabowska-4197826.jpg" alt="Events3">
            <figcaption>[Events] Color of food: Yellow </figcaption>
          </figure>
          <figure class="flex_wrap_item" >
            <img src="assets/images/pexels-valeria-boltneva-1148087.jpg" alt="Events4">
            <figcaption>[Events] Color of food: Green </figcaption>
          </figure>
        </div>
        </section>
      </div>


      <!--- footer ------------------------------------------------------------>
      <?php include ('includes/footer.php');?>
      
    </div>
  </body>
</html>