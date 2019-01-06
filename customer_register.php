<?php

    session_start();

    include("includes/db.php");

    include("functions/functions.php");

?>

<!DOCTYPE html>
<html>

<head>
<title>E commerce Store </title>

    <link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet" >

    <link href="styles/bootstrap.min.css" rel="stylesheet">

    <link href="styles/style.css" rel="stylesheet">

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<body>

<div id="top"><!-- top Starts -->

<div class="container"><!-- container Starts -->

<div class="col-md-6 offer"><!-- col-md-6 offer Starts -->

    <a href="#" class="btn btn-success btn-sm" >

        <?php

            if(!isset($_SESSION['customer_email'])){

                echo "Welcome :Guest";


            }else{

                echo "Welcome : " . $_SESSION['customer_email'] . "";

        }


        ?>

    </a>

    <a href="#">
         Shopping Cart Total Price:666, Total Items 8
    </a>

</div><!-- col-md-6 offer Ends -->

<div class="col-md-6"><!-- col-md-6 Starts -->
   <ul class="menu"><!-- menu Starts -->

    <li>
        <a href="customer_register.php">
           Register
        </a>
    </li>

    <li>
<?php

if(!isset($_SESSION['customer_email'])){

    echo "<a href='checkout.php'>My Account</a>";

}
else{

    echo "<a href='customer/my_account.php?my_orders'>My Account</a>";

}


?>
    </li>

    <li>
        <a href="cart.php">
           Go to Cart
        </a>
    </li>

    <li>

<?php

if(!isset($_SESSION['customer_email'])){

    echo "<a href='checkout.php'> Login </a>";

}else {

    echo "<a href='logout.php'> Logout </a>";

}

?>
      </li>

    </ul><!-- menu Ends -->

</div><!-- col-md-6 Ends -->

</div><!-- container Ends -->
</div><!-- top Ends -->

<div class="navbar navbar-default" id="navbar">    <!-- navbar navbar-default Starts -->
<div class="container" ><!-- container Starts -->

<div class="navbar-header"><!-- navbar-header Starts -->

    <a class="navbar-brand home" href="index.php" >    <!--- navbar navbar-brand home Starts -->

        <img src="images/logo.png" alt="computerfever logo" class="hidden-xs" >
        <img src="images/logo-small.png" alt="computerfever logo" class="visible-xs" >

    </a><!--- navbar navbar-brand home Ends -->

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation"  >

        <span class="sr-only" >Toggle Navigation </span>

        <i class="fa fa-align-justify"></i>

    </button>

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search" >

        <span class="sr-only" >Toggle Search</span>

        <i class="fa fa-search" ></i>

    </button>


</div><!-- navbar-header Ends -->

<div class="navbar-collapse collapse" id="navigation" ><!-- navbar-collapse collapse Starts -->

<div class="padding-nav" ><!-- padding-nav Starts -->

    <ul class="nav navbar-nav navbar-left"><!-- nav navbar-nav navbar-left Starts -->

        <li>
             <a href="index.php"> Home </a>
        </li>

        <li>
             <a href="shop.php"> Shop </a>
        </li>

        <li>

    <?php

        if(!isset($_SESSION['customer_email'])){

           echo "<a href='checkout.php' >My Account</a>";

        }
        else{

           echo "<a href='customer/my_account.php?my_orders'>My Account</a>";

        }


    ?>
        </li>

        <li>
            <a href="cart.php"> Shopping Cart </a>
        </li>

        <li>
                       <a href="about.php"> About Us </a>
                  </li>

        <li>
            <a href="contact.php"> Contact Us </a>
        </li>

    </ul><!-- nav navbar-nav navbar-left Ends -->

</div><!-- padding-nav Ends -->

    <a class="btn btn-primary navbar-btn right" href="cart.php">    <!-- btn btn-primary navbar-btn right Starts -->

       <i class="fa fa-shopping-cart"></i>

       <span> 7 items in cart </span>

     </a><!-- btn btn-primary navbar-btn right Ends -->

<div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Starts -->

    <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">

      <span class="sr-only">Toggle Search</span>

      <i class="fa fa-search"></i>

    </button>

</div><!-- navbar-collapse collapse right Ends -->

<div class="collapse clearfix" id="search"><!-- collapse clearfix Starts -->

    <form class="navbar-form" method="get" action="results.php"><!-- navbar-form Starts -->

        <div class="input-group"><!-- input-group Starts -->

          <input class="form-control" type="text" placeholder="Search" name="user_query" required>

          <span class="input-group-btn"><!-- input-group-btn Starts -->

           <button type="submit" value="Search" name="search" class="btn btn-primary">

             <i class="fa fa-search"></i>

           </button>

           </span><!-- input-group-btn Ends -->

        </div><!-- input-group Ends -->

    </form><!-- navbar-form Ends -->

</div><!-- collapse clearfix Ends -->

</div><!-- navbar-collapse collapse Ends -->

</div><!-- container Ends -->
</div><!-- navbar navbar-default Ends -->


<div id="content" >     <!-- content Starts -->
<div class="container" >  <!-- container Starts -->

<div class="col-md-12" >    <!--- col-md-12 Starts -->

    <ul class="breadcrumb" >      <!-- breadcrumb Starts -->

        <li>
            <a href="index.php">Home</a>
        </li>

        <li>Register</li>

    </ul>                        <!-- breadcrumb Ends -->



</div>  <!---------------       col-md-12 Ends   and page body start from here ------------------->




<div class="col-md-12" >                        <!-- col-md-9 Starts -->

<div class="box" >                         <!-- box Starts -->

<div class="box-header" >             <!-- box-header Starts -->

    <center><!-- center Starts -->

       <h2> Register A New Account </h2>

    </center><!-- center Ends -->

</div><!-- box-header Ends -->

   <form action="customer_register.php" method="post" enctype="multipart/form-data" >   <!-- form Starts -->

        <div class="form-group" >          <!-- form-group Starts -->

          <label>Customer Name</label>

          <input type="text" class="form-control" name="c_name" required>

        </div>                         <!-- form-group Ends -->

        <div class="form-group">              <!-- form-group Starts -->

          <label> Customer Email</label>

          <input type="text" class="form-control" name="c_email" required>

        </div>                       <!-- form-group Ends -->

    <div class="form-group"><!-- form-group for password Starts -->

         <label> Customer Password </label>

         <div class="input-group"><!-- input-group Starts -->

       <span class="input-group-addon"><!-- input-group-addon Starts -->

            <i class="fa fa-check tick1"> </i>

            <i class="fa fa-times cross1"> </i>

        </span><!-- input-group-addon Ends -->

         <input type="password" class="form-control" id="pass" name="c_pass" required>

        <span class="input-group-addon"><!-- input-group-addon Starts -->

            <div id="meter_wrapper"><!-- meter_wrapper for password Starts -->

               <span id="pass_type"> </span>

            <div id="meter"> </div>

            </div><!-- meter_wrapper Ends -->

          </span><!-- input-group-addon Ends -->

         </div><!-- input-group Ends -->

       </div><!-- form-group Ends -->

    <div class="form-group"><!-- form-group for confirm password Starts -->

      <label> Confirm Password </label>

      <div class="input-group"><!-- input-group Starts -->

        <span class="input-group-addon"><!-- input-group-addon Starts -->

            <i class="fa fa-check tick2"> </i>

            <i class="fa fa-times cross2"> </i>

        </span><!-- input-group-addon Ends -->

         <input type="password" class="form-control confirm" id="con_pass" required>

        </div><!-- input-group Ends -->

      </div><!-- form-group Ends -->

    <div class="form-group"><!-- form-group Starts -->

      <label> Customer Country </label>

      <input type="text" class="form-control" name="c_country" required>

    </div>                 <!-- form-group Ends -->

    <div class="form-group">           <!-- form-group Starts -->

      <label> Customer City </label>

      <input type="text" class="form-control" name="c_city" required>

    </div><!-- form-group Ends -->

    <div class="form-group"><!-- form-group Starts -->

      <label> Customer Contact </label>

      <input type="text" class="form-control" name="c_contact" required>

    </div><!-- form-group Ends -->

    <div class="form-group"><!-- form-group Starts -->

      <label> Customer Address </label>

      <input type="text" class="form-control" name="c_address" required>

    </div><!-- form-group Ends -->

    <div class="form-group"><!-- form-group Starts -->

      <label> Customer Image </label>

      <input type="file" class="form-control" name="c_image" required>

    </div><!-- form-group Ends -->

    <div class="form-group"><!-- form-group Starts -->

        <center>

            <label> Captcha Verification </label>

            <div class="g-recaptcha" data-sitekey="6LcnfD4UAAAAABb7qOOzkxS0eTTFqA85_lJSkdAQ"></div>

        </center>

    </div><!-- form-group Ends -->



    <div class="text-center"><!-- text-center Starts -->

        <button type="submit" name="register" class="btn btn-primary">

           <i class="fa fa-user-md"></i> Register

        </button>

    </div><!-- text-center Ends -->

  </form><!-- form Ends -->

</div><!-- box Ends -->

</div><!-- col-md-12 Ends -->



</div><!-- container Ends -->
</div><!-- content Ends -->



<?php

   include("includes/footer.php");

?>

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

<script src="js/scripts.js"></script>
</body>
</html>

<?php

if(isset($_POST['register'])){
    
        /////////////////////// Now starting code block for recaptcha confirmation  //////////////////
    
          $secret = "6LcnfD4UAAAAAGGtMrLza3xdyWCYXhQUDuwP-Pfv"; 

        $response = $_POST['g-recaptcha-response'];    

        $remoteip = $_SERVER['REMOTE_ADDR'];   

    $url = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip");  

$result = json_decode($url, TRUE);    

if($result['success'] == 1){   
    
                    ///////////////////////////////////////////////////////////////////////////
    
         $c_name = $_POST['c_name'];
        $c_email = $_POST['c_email'];
         $c_pass = $_POST['c_pass'];
      $c_country = $_POST['c_country'];
         $c_city = $_POST['c_city'];
      $c_contact = $_POST['c_contact'];
      $c_address = $_POST['c_address'];
        $c_image = $_FILES['c_image']['name'];
    $c_image_tmp = $_FILES['c_image']['tmp_name'];

           $c_ip = getRealUserIp(); 

move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");
    
  ////////////////////////// this code block is checking the duplicate id   /////////////////////////// 
    
      $get_email = "select * from customers where customer_email='$c_email'"; 

      $run_email = mysqli_query($con,$get_email);                            

    $check_email = mysqli_num_rows($run_email);                              

if($check_email == 1){                                                     

    echo "<script>alert('This email is already registered, try another one')</script>";

    exit();

    }
      ////////////////////////// duplicate account checking query end here  /////////////////////////////
    
    ////////////////////////// Now starting code block 4 email confirmation  /////////////////////////////
    
    $customer_confirm_code = mt_rand();

                  $subject = "Email Confirmation Message";

                     $from = "bmdesignss@gmail.com";

                  $message = "

            <h2>
                 Email Confirmation By BMDesigns.com $c_name
            </h2>

             <a href='localhost/ecom_store/customer/my_account.php?$customer_confirm_code'>

                   Click Here To Confirm Email

            </a>

            ";       // -->   Note: remaining email confirmation code  is in the my_account page   <--

                 $headers = "From: $from \r\n";

                $headers .= "Content-type: text/html\r\n";

      mail($c_email,$subject,$message,$headers);
    

    ////////////////////////  Email confirmation code block end here   /////////////////////////
    
         $insert_customer = "insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image,customer_ip,customer_confirm_code) values ('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip','$customer_confirm_code')";


          $run_customer = mysqli_query($con,$insert_customer);

              $sel_cart = "select * from cart where ip_add='$c_ip'";

              $run_cart = mysqli_query($con,$sel_cart);

            $check_cart = mysqli_num_rows($run_cart);

    if($check_cart>0){

    $_SESSION['customer_email']=$c_email;

            echo "<script>alert('You have been Registered Successfully')</script>";

            echo "<script>window.open('checkout.php','_self')</script>";

    }else{

    $_SESSION['customer_email']=$c_email;

            echo "<script>alert('You have been Registered Successfully')</script>";

            echo "<script>window.open('index.php','_self')</script>";

}

}
    
    else{        // <-   recaptcha confirmaiton code end

  echo "<script>alert('Please Select Captcha, Try Again')</script>";   // <-   recaptcha confirmaiton code end

}    // <-   recaptcha confirmaiton code end


}

?>

