<!DOCTYPE html>



<html>
   <head>
      <meta charset="utf-8">
      <title>LOGIN</title>
      <link rel="stylesheet" href="reglogin.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
   <form action="">
      <div class="center">
    
         <div class="container">
            <label for="show" class="close-btn fas fa-times" title="close"></label>
            <div class="text">
             Admin  Login 
            </div>
            
               <div class="data">
                  <label>Email or Phone</label>
                  <input type="text" required>
               </div>
               <div class="data">
                  <label>Password</label>
                  <input type="password" required>
               </div>
               <div class="forgot-pass">
                  <a href="#">Forgot Password?</a>
               </div>
               <div class="btn">
                  <div class="inner"></div>
                  <input type="submit" name="submit" value="submit" class="btn" formaction="{{url('index-admin')}}">
               </div>
               <div class="signup-link">
                  Not a member? <a href="registration_admin">Signup</a><a href="./" class="ca">back</a>
               </div>
           
         </div>
      </div>
</form>
   </body>
</html>
