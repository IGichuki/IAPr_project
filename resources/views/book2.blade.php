<?php

require("connect.php");

if(isset($_POST['order_btn'])){

   $name = $_POST['name'];
   $email = $_POST['email'];
   $number = $_POST['phone'];
   $address = $_POST['address'];
   $location = $_POST['location'];
   $guests = $_POST['guests'];
   $arrivals = $_POST['arrivals'];
   $leaving = $_POST['leaving'];
   $payment = $_POST['paymentmethod'];


 

   $cart_query = mysqli_query($conn, "SELECT * FROM `user`");
   $price_total = 0;
   if(mysqli_num_rows($cart_query) > 0){
      while($name = mysqli_fetch_assoc($cart_query)){
        // $name[] = $name['username'] .' ('. $location['location'] .') ';
        // $product_price = number_format($product_item['Price'] * $product_item['Quantity']);
         //echo $name;
      };
   };

   //$total_product = implode(', ',$name);
   $detail_query = mysqli_query($conn, "INSERT INTO `booking`(name, email, phone, address, location, guests, arrivals, leaving, paymentmethod) VALUES('$name','$email','$number','$address','$location','$guests','$arrivals','$leaving','$payment')") or die('query failed');

   if($cart_query && $detail_query){
      echo "
      <div class='order-message-container'>
      <div class='message-container'>
         <h3>thank you for choosing to travel with us!</h3>
         <div class='order-detail'>
           <span>".$name."</span>
            <span class='total'> total : </span>
         </div>
         <div class='customer-details'>
            
         <p>  Email : <span>".$email."</span> </p>
            <p>  Number : <span>".$number."</span> </p>
            <p>  Address : <span> ".$address."</span> </p>
            <p>  Location : <span>".$location."</span> </p>
            <p>  Guests : <span>".$guests."</span> </p>
            <p>  Arrivals : <span>".$arrivals."</span> </p>
            <p>  Leaving : <span>".$leaving."</span> </p>
            <p>  Payment mode : <span>".$payment."</span> </p>
            
         </div>
            <a href='book2' class='btn'>return to booking</a>
         </div>
      </div>
      ";
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>booking</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style4.css">

</head>
<body>

<!-- header section starts  


<section class="header2">

   <a href="home.php" class="logo2">FENONO</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      
   </nav>  

</section>  -->

<?php include 'header'; ?>

<!-- header section ends -->

<!-- booking section starts  -->


<div class="container">

<section class="checkout-form">

   <h1 class="heading">book your trip!</h1>

   <form action="" method="post">

   <div class="display-order">
      <?php
         $select_cart = mysqli_query($conn, "SELECT * FROM `user`");
         $total = 0;
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
          //  $total_price = number_format($fetch_cart['Price'] * $fetch_cart['Quantity']);
         //  echo $grand_total = $grand_total and  $total_price;
        // echo $username;
      ?>
  
      <?php
         }
      }else{
        // echo "<div class='display-order'><span>your cart is empty!</span></div>";
      }
      ?>
      <span class="grand-total"> WENSTON </span>
   </div>

      <div class="flex">
      <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
         </div>
         <div class="inputBox">
            <span>where to :</span>
            <input type="text" placeholder="place you want to visit" name="location">
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests">
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving">
         </div>
         <div class="inputBox">
            <span>payment method</span>
            <select name="paymentmethod">               
               <option value="m-pesa" selected>m-pesa</option>
               <option value="cash on delivery" >cash on arrival</option>
               <option value="credit cart">credit card</option>
            </select>
         </div>
         
      </div>
      <input type="submit" value="booknow" name="order_btn" class="btn-primary">
   </form>

</section>

</div>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>
