<?php include ('includes/config.php');
  $page_title = "Subscribe";
  $page_description = "Subscribe to the newsletter for more benefits.";
  $current = "c_subscribe";
?>

<!DOCTYPE html>
<html lang="en">

  <head>
      <?php include ('includes/head.php');?>
      <link rel="stylesheet" href="assets/css/subscribe.css">
  </head>

  <body class=<?php echo $current; ?>>
    <div class="hero-image">
      <!-- Navigation -->
      <?php include ('includes/nav.php');?>

      <div class="mwrapper">
       <!-- Header -->
       <?php include ('includes/header.php');?>

        <div class="form_wrap">
          <form action="" method="post">
            <fieldset>
              <legend>Subscribe to the newsletter for more benefits.</legend> 

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

              <ul class="check-box">
                <li><input type="checkbox" id="checkbox" name="checkbox" value="yes">
                <label for="promotion">Yes, I would like to receive promotional emails</label>
                </li>
              </ul>

              <div>
                <button type="button" id="Subscribe" class="c_button">Subscribe</button>
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