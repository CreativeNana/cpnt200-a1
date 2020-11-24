<?php include ('includes/config.php');
  $page_title = "Contact";
  $page_description = "Please tell us your ideas and reviews.";
  $current = "c_contact";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <?php include ('includes/head.php');?>
      <link rel="stylesheet" href="assets/css/contact.css">
  </head>
  
  <body class=<?php echo $current; ?>>
    <div class="hero-image">
      <?php include ('includes/nav.php');?>

      <div class="mwrapper">
       <!-- Header -->
       <?php include ('includes/header.php');?>
               
        <section>
          <div class="flex_wrap">
            <figure class="flex_wrap_item" >
              <img src="assets/images/pexels-cottonbro-4057693.jpg" alt="Restaurant owner">
              <figcaption>Delicacy owner </figcaption>
              <footer>
                <ul>
                  <li> <a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li> <a href="#"><i class="fab fa-github"></i></a></li>
                  <li> <a href="#"><i class="fab fa-facebook"></i></a></li>
                  <li> <a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
              </footer>
            </figure>
            <figure class="flex_wrap_item" >
              <img src="assets/images/pexels-denys-gromov-4669229.jpg" alt="Head Chef">
              <figcaption>Head Chef </figcaption>
              <footer>
                <ul>
                  <li> <a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li> <a href="#"><i class="fab fa-github"></i></a></li>
                  <li> <a href="#"><i class="fab fa-facebook"></i></a></li>
                  <li> <a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
              </footer>
            </figure>
            <figure class="flex_wrap_item" >
              <img src="assets/images/pexels-tirachard-kumtanom-887827.jpg" alt="Chef">
              <figcaption>Chef</figcaption>
              <footer>
                <ul>
                  <li> <a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li> <a href="#"><i class="fab fa-github"></i></a></li>
                  <li> <a href="#"><i class="fab fa-facebook"></i></a></li>
                  <li> <a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
              </footer>
            </figure>
          </div>
        </section>


        <div class="form_wrap">
          <form action="" method="post">
            <fieldset>
              <legend>Please send us your opinion</legend> 

              <div class="form-group">
                <label for="name">Name <h>*</h>:</label>
                <input type="text" id="name"  class="input-control" name="email" placeholder="Please input your name" required>
              </div>

              <div class="form-group">
                <label for="email">E-mail <h>*</h>:</label>
                <input type="text" id="email"  class="input-control" name="email" placeholder="Please enter your E-mail address" required>
              </div>
      
              <div class="form-group">
                <label for="password">Password <h>*</h>:</label>
                <input type="text" id="password"  class="input-control" name="password" placeholder="Please enter your password" required>
              </div> 

              <div class="form-group">
                <label for="textarea">Message<h>*</h>:</label>
                <textarea name="" id="textarea" cols="40" rows="5" class="form-control" placeholder="Message" required></textarea>
              </div>

              <div>
                <button type="button" id="contact" class="c_button">Send Message</button>
              </div>
            </fieldset>
          </form>
        </div>

      </div>

      <!--- footer ------------------------------------------------------------>
      <?php include ('includes/footer.php');?>
    </div>
    <script type="text/JavaScript" src="assets/js/menu.js"></script>  

</body>
</html>