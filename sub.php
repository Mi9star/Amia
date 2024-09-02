<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Form</title>
    <link rel="stylesheet" href="assets/css/sub.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <input type="checkbox" id="toggle">
  <label for="toggle" class="show-btn">Show Modal</label>
  <div class="wrapper">
    <label for="toggle">
    <i class="cancel-icon fas fa-times"></i>
    </label>
    <div class="icon"><i class="far fa-envelope"></i></div>
    <div class="content">
      <header>Confirming your order</header>
      <p>please enter your email adress</p>
    </div>
    <form action="sample.php" method="POST">
    <?php 
    $userEmail = ""; //first we leave email field blank
    if(isset($_POST['subscribe'])){ //if subscribe btn clicked
      $userEmail = $_POST['email']; //getting user entered email
      if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){ //validating user email
        $subject = "Thanks for Subscribing us ";
        $message = "Thanks for subscribing to our blog. You'll always receive updates from us. And we won't share and sell your information.";
        $sender = "From: shahiprem7890@gmail.com";


        //php function to send mail
        if(mail($userEmail, $subject, $message, $sender)){
          ?>
           <!-- show sucess message once email send successfully -->
          <div class="alert success-alert">
            <?php echo "Thanks for Subscribing us." ?>
          </div>
          <?php
          $userEmail = "";
        }else{
          ?>
          <!-- show error message if somehow mail can't be sent -->
          <div class="alert error-alert">
          <?php echo "Failed while sending your mail!" ?>
          </div>
          <?php
        }
      }else{
        ?>
        <!-- show error message if user entered email is not valid -->
        <div class="alert error-alert">
          <?php echo "$userEmail is not a valid email address!" ?>
        </div>
        <?php
      }
    }
    ?>
      <div class="field">
        <input type="text" class="email" name="email" placeholder="Email Address" required value="<?php echo $userEmail ?>">
      </div>
      <div class="field btn">
        <div class="layer"></div>
        <button type="submit" name="subscribe">Subscribe</button>

  
      </div>
    </form>
    <div class="text">We do not share your information.</div>
  </div>

  <!-- to order section starts here  -->
  <div class="container">
  <img src="JF.jpg" style="width:100%;">
  <div class="content">
  <center>
  <div class="container mt-5">
    <form action="" method="post" class="mb-3">
      <div class="select-block">
        <select name="Cake1">
          <option disabled selected value> Choose your color</option>
			<option value="Strawberry Chiffon">silver</option>
			<option value="Mango Bravo"> gold</option>
			<option value="Carrot Cake">rose gold</option>
			
        </select>

  <div class="container mt-5">
    <form action="" method="post" class="mb-3">
      <div class="select-block">
        <select name="Cake2">
          <option disabled selected value> Choose a payment option </option>
			<option value="Whole Cake">paypal</option>
			<option value="Slice Cake">credit card</option>
        </select>

 <div class="container mt-5">
    <form action="" method="post" class="mb-3">
      <div class="select-block">
        <select name="Cake3">
          <option disabled selected value> engravement option</option>
			<option value="Dine In">no engravement</option>
			<option value="Take Out">put engravement</option>
        </select>


	 <div class="container mt-5">
    <form action="" method="post" class="mb-3">
      <div class="select-block">
        <select name="Cake4">
          <option value="" disabled selected>Are you sure about your order? </option>
          <option value="Yes">Yes</option>
          <option value="No">No</option>

        </select>
     </div>
     <input type="submit" name="Submit" vlaue="Choose options">

    </form>
      </div>



	<h3>
    <?php
      if(isset($_POST['Submit'])){
        if(!empty($_POST['Cake1'])) {
          $selected = $_POST['Cake1'];
		  echo  nl2br("\nChoose a Flavor: "). $selected;
        } else {
          echo '  ';
        }
      }
   {
        if(!empty($_POST['Cake2'])) {
          $selected = $_POST['Cake2'];
		  echo  nl2br("\nChoose a Size: "). $selected;
        } else {
          echo ' ';
        }
      }

        if(!empty($_POST['Cake3'])) {
          $selected = $_POST['Cake3'];
		 echo  nl2br("\nOption For Ordering: "). $selected;
        } else {
          echo ' ';
        }


        if(!empty($_POST['Cake4'])) {
          $selected = $_POST['Cake4'];
		  echo  nl2br("\nAre you sure about your order? "). $selected;
        } else {
          echo '  ';
        }
		

    ?>
	</h3>
	</center>

  </div>
  
</div>
 <img src="" style="width:10%" align="center">
    <!-- to order section ends here  -->

</body>
</html>