


<!DOCTYPE html>
<html>
<head>
     <title>LOGIN</title>
     <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>


$_POST= new Post($dbconnect);

<div class="login-form-container">

    <i class="fas fa-times" id="form-close"></i>



     <form action="" method="">
           <br>

          <h2>USER LOGIN</h2>
       

          
          <label>User Name</label>
          <input type="email" name="email" placeholder="enter email"><br>

          <label>Password</label>
          <input type="password" name="password" placeholder="Password"><br>

          <input type="submit" name="submit" value="login now" class="btn" formaction="{{url('home')}}">
          
          <p>Create an account<a href="signup" class="ca"><b>SIGN_UP</b></a><a href="./" class="ca">back</a></p>
          
     </form>

</div>




<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script2.js"></script> 

</body>
</html>

