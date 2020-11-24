<?php include ('includes/config.php');
  $page_title = "Home";
  $page_description = "Delicious, Delightful and Differentiated";
  $current = "c_index";
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <?php include ('includes/head.php');?>
    <link rel="stylesheet" href="assets/css/main.css">
  </head>
  
  <body class=<?php echo $current; ?>>
    <div class="hero-image">
      <!-- Navigation -->
      <?php include ('includes/nav.php');?>

      <div class="mwrapper">
      <!-- Header -->
      <?php include ('includes/header.php');?>

      <section>
        <h3>The delicacies of the day</h3>
        <div class="flex_wrap">
          <figure class="flex_wrap_item" >
            <img src="assets/images/488-original.jpg" alt="food menu1">
            <figcaption>Stir-fried Pork with Onion </figcaption>
          </figure>
          <figure class="flex_wrap_item" >
            <img src="assets/images/pexels-jer-chung-original.jpg" alt="food menu2">
            <figcaption>Stir-fried Pork with Onion </figcaption>
          </figure>
          <figure class="flex_wrap_item" >
            <img src="assets/images/pexels-jer-chung2-original.jpg" alt="food menu3">
            <figcaption>Stir-fried Pork with Onion </figcaption>
          </figure>
          <figure class="flex_wrap_item" >
            <img src="assets/images/pexels-lumn-1410236.jpg" alt="food menu4">
            <figcaption>Stir-fried Pork with Onion </figcaption>
          </figure>
        </div>
      </section>

      <section>
        <div class="flex_wrap2">
          <div class="flex_wrap_item2">
            <figure>
              <img src="assets/images/pexels-miquel-ferran-gomez-figueroa-3814446.jpg" alt="The chef of this year">
              <figcaption>The chef of this year </figcaption>
            </figure>
            <figure class="flex_wrap2_quote">
              <blockquote cite="https://www.lipsum.com/feed/html"  class="hover">
                Vivamus nec venenatis quam. Nam dapibus aliquam lectus in cursus. Pellentesque vestibulum odio et augue congue iaculis. Phasellus massa nunc, ultricies a lectus cursus, commodo blandit sapien. Integer euismod metus id risus fringilla ultricies. In hac habitasse platea dictumst.
              </blockquote>
              <figcaption>
                —Aldous Huxley, <cite>Brave New World</cite>
              </figcaption>
            </figure>
          </div>

          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque id convallis lectus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam quam libero, eleifend ac dapibus non, bibendum in neque. Ut sed feugiat libero, non bibendum mauris. Vivamus nec lorem lectus. Morbi rutrum ultricies enim vel semper. Nullam semper sem in risus luctus, eu semper velit iaculis. Nam quis iaculis mauris. Nullam elit mi, cursus varius nulla vitae, iaculis aliquam odio.</p>
          <p> Cras convallis tortor ut diam volutpat, quis mollis ante ultricies. Sed convallis sapien a nibh porta maximus. Integer ut mollis arcu, non porttitor urna. Aliquam at velit eget felis eleifend ultrices. Vivamus urna massa, vulputate in viverra vel, tempus eu lectus. Nam ac porta felis, eget ultrices tortor. Maecenas efficitur elementum magna, at ultricies dui finibus ut. Proin magna ante, blandit et ornare non, hendrerit id lectus. Duis turpis ligula, mollis id nisl eu, dignissim tristique velit. Phasellus in est ut sem imperdiet vestibulum.</p>
          <p> Etiam quis mauris scelerisque, sodales turpis sit amet, fringilla metus. In hac habitasse platea dictumst. Sed luctus sodales ipsum et faucibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Suspendisse cursus consequat tellus, sit amet consequat nulla blandit congue. Proin laoreet, eros vitae iaculis blandit, felis est dictum quam, feugiat efficitur erat dolor et nulla. Donec vitae nulla a turpis pharetra maximus non tempor purus. Aenean iaculis odio felis, ac faucibus leo varius ac. Aenean porttitor magna est, sed elementum tellus tincidunt sit amet.</p>
        </div>              
      </section>  
    </div>

      <!--- footer ------------------------------------------------------------>
      <?php include ('includes/footer.php');?>
    </div>
    <script type="text/JavaScript" src="assets/js/menu.js"></script>  
  </body>
</html>