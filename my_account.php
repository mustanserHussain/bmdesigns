<?php
session_start();


if(!isset($_SESSION['customer_email'])){

echo "<script>window.open('../checkout.php','_self')</script>";


}else {

    include("includes/db.php");
    include("functions/functions.php");

?>


<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    
      <title> New Ecommerce Store </title>
    
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet" >

         <link href="styles/bootstrap.min.css" rel="stylesheet">

          <link href="styles/style.css" rel="stylesheet">

           <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
  <div id="top"> <!-- top starts -->
    <div class="container">  <!-- container starts -->
        <div class="col-md-6 offer">   <!-- col md 6 starts -->
             <a href="" class="btn btn-success btn-sm">
                 
<?php

        if(!isset($_SESSION['customer_email'])){

               echo "Welcome :Guest";

                 }else{

echo "Welcome : " . $_SESSION['customer_email'] . "";

}

?>
              </a>
             <a href="">
                     Shoping Cart total price:<?php total_price(); ?>, total items <?php echo items(); ?> 
              </a>
        </div>   <!-- col md 6 end -->
        
        <div class="col-md-6 ">   <!-- col md 6 starts -->
          <ul class="menu">
            <li>
               <a href="customer_register.php">
                   Register
               </a>
           </li> 
           <li class="active">
               <a href="checkout.php">
                   My Account
               </a>
           </li> 
           <li>
               <a href="cart.php">
                   Go to Cart
               </a>
           </li> <li>
               <?php

    if(!isset($_SESSION['customer_email'])){

       echo "<a href='checkout.php'> Login </a>";

    }else {

       echo "<a href='../logout.php'> Logout </a>";

    }

?>
           </li> 
        </ul>
        
        </div>   <!-- col md 6 end -->
    </div><!-- container starts -->
</div>                                                <!-- top end -->
     <!---------------------------------------------------------------------------------------------------->
  
  
<div class="navbar navbar-default" id="navbar">   <!-- navbar navbar-default Starts -->
<div class="container" >   <!-- container Starts -->

<div class="navbar-header">   <!-- navbar-header Starts -->

    <a class="navbar-brand home" href="index.php" >     <!--- navbar navbar-brand home Starts -->

        <img src="images/logo.png" alt="computerfever logo" class="hidden-xs" >
        <img src="images/logo-small.png" alt="computerfever logo" class="visible-xs" >

    </a>   <!--- navbar navbar-brand home Ends -->

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation"  >

        <span class="sr-only" >Toggle Navigation </span>

        <i class="fa fa-align-justify"></i>

    </button>

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search" >

        <span class="sr-only" >Toggle Search</span>

        <i class="fa fa-search" ></i>

    </button>

</div>
                 <!------------------------- navbar-header Ends ------------------------------------------->


<div class="navbar-collapse collapse" id="navigation" ><!-- navbar-collapse collapse Starts -->

<div class="padding-nav" ><!-- padding-nav Starts -->

    <ul class="nav navbar-nav navbar-left"><!-- nav navbar-nav navbar-left Starts -->

        <li>
             <a href="../index.php"> Home </a>
        </li>

        <li>

<?php

    if(!isset($_SESSION['customer_email'])){

         echo "<a href='my_account.php' >My Account</a>";

    }
    else{

         echo "<a href='customer/my_account.php?my_orders'>My Account</a>";

    }


?>
            </li>

            <li>
                <a href="../cart.php"> Shopping Cart </a>
            </li>

            <li>
                <a href="../contact.php"> Contact Us </a>
            </li>

        </ul>  <!-- nav navbar-nav navbar-left Ends -->

</div>
       <!------------------------------------- padding-nav Ends ---------------------------------->


    <a class="btn btn-primary navbar-btn right" href="cart.php">
    <!-- btn btn-primary navbar-btn right Starts -->

        <i class="fa fa-shopping-cart"></i>

        <span> <?php echo items(); ?> items in cart </span>

    </a>                                      <!-- btn btn-primary navbar-btn right Ends -->

<div class="navbar-collapse collapse right">     <!-- navbar-collapse collapse right Starts -->

    <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">

        <span class="sr-only">Toggle Search</span>

        <i class="fa fa-search"></i>

    </button>

</div>          <!-- navbar-collapse collapse right Ends -->                 

    <div class="collapse clearfix" id="search">             <!-- collapse clearfix Starts -->

        <form class="navbar-form" method="get" action="results.php">   <!-- navbar-form Starts -->

            <div class="input-group">      <!-- input-group Starts -->

               <input class="form-control" type="text" placeholder="Search" name="user_query" required>

               <span class="input-group-btn">      <!-- input-group-btn Starts -->

               <button type="submit" value="Search" name="search" class="btn btn-primary">

                 <i class="fa fa-search"></i>

               </button>

              </span>  <!-- input-group-btn Ends -->

            </div>   <!-- input-group Ends -->

        </form>  <!-- navbar-form Ends -->

    </div>   <!-- collapse clearfix Ends -->
</div>   <!-- navbar-collapse collapse Ends -->
</div>   <!-- container Ends -->
</div>
         <!-------------------------------- navbar navbar-default end ---------------------------------->

<div id="content" >       <!-- content Starts -->

<div class="container" >  <!-- container Starts -->

<div class="col-md-12" >  <!--- col-md-12 Starts -->

    <ul class="breadcrumb" >  <!-- breadcrumb Starts -->

        <li>
             <a href="index.php">Home</a>
        </li>

        <li>My Account</li>

    </ul>                              <!-------- breadcrumb Ends --------->
    
</div>    <!---------------       col-md-12 Ends   and page body start from here ------------------->

<!-------------------------------     Starting code for email confirmation   ----------------------->

<div class="col-md-12"><!-- col-md-12 Starts -->

<?php

                  $c_email = $_SESSION['customer_email'];

             $get_customer = "select * from customers where customer_email='$c_email'";

             $run_customer = mysqli_query($con,$get_customer);

             $row_customer = mysqli_fetch_array($run_customer);

    $customer_confirm_code = $row_customer['customer_confirm_code'];
                   $c_name = $row_customer['customer_name'];

    if(!empty($customer_confirm_code)){

?>

   <div class="alert alert-danger">   <!-- alert alert-danger Starts -->

<strong> Warning! </strong> Please Confirm Your Email and if you have not received your confirmation email

        <a href="my_account.php?send_email" class="alert-link"> 

             Send Email Again

        </a>

   </div><!-- alert alert-danger Ends -->

<?php } ?>

</div><!-- col-md-12 Ends -->
                        
    <!-------------------------------     End code for email confirmation     ----------------------->


<div class="col-md-3">   <!-- col-md-3 Starts -->

   <?php include("includes/sidebar.php"); ?>

</div>     <!-------------------------------- col-md-3 Ends ------------------------------------->


<div class="col-md-9" ><!--- col-md-9 Starts -->

<div class="box" ><!-- box Starts -->


<?php
       ////////////////////////     starging block for email confirmation    //////////////////////////
       
   if(isset($_GET[$customer_confirm_code])){

     $update_customer = "update customers set customer_confirm_code='' where customer_confirm_code='$customer_confirm_code'";

         $run_confirm = mysqli_query($con,$update_customer);

     echo "<script>alert('Your Email Has Been Confirmed')</script>";

     echo "<script>window.open('my_account.php?my_orders','_self')</script>";

}
     /////////   Now writing 2nd code block for sending email verification code again     /////////////
    
   if(isset($_GET['send_email'])){

            $subject = "Email Confirmation Message";

               $from = "bmdesigns@gmail.com";

            $message = "

        <h2>
             Email Confirmation By bmdesignss.com $c_name
        </h2>

             <a href='http://bmdesignss,com/ecom_store/customer/my_account.php?$customer_confirm_code'>

             Click Here To Confirm Email

        </a>

        ";

          $headers = "From: $from \r\n";

         $headers .= "Content-type: text/html\r\n";

   mail($c_email,$subject,$message,$headers);

    echo "<script>alert('Your Confirmation Email Has Been sent to you, check your inbox')</script>";

    echo "<script>window.open('my_account.php?my_orders','_self')</script>";

}

////////////////////////     ending 2nd code block for email verification    //////////////////////////
    

    if(isset($_GET['my_orders'])){
                                       include("my_orders.php");
                                     }

    if(isset($_GET['pay_offline'])) {
                                     include("pay_offline.php");
                                    }

    if(isset($_GET['edit_account'])) {
                                      include("edit_account.php");
                                     }

    if(isset($_GET['change_pass'])){
                                    include("change_pass.php");
                                   }

    if(isset($_GET['delete_account'])){
                                       include("delete_account.php");
                                      }

    if(isset($_GET['my_wishlist'])){

                                    include("my_wishlist.php");

                                    }

    if(isset($_GET['delete_wishlist'])){

                                        include("delete_wishlist.php");

                                        }

   ?>

</div><!-- box Ends -->
</div><!--- col-md-9 Ends -->

</div>   <!-- container Ends -->
</div>   <!-- content Ends -->

   <?php

         include("includes/footer.php");

    ?>
        <script src="js/jquery.min.js"> </script>
        <script src="js/bootstrap.min.js"></script>

</body>
</html>
      <?php } ?>