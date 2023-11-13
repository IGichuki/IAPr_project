

<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
     <form action="signup" method="POST">
     @csrf
     	<h2>Fill in your details to create an account</h2>
     	

          <label>Username:</label>
               <input type="text" 
                      name="name" 
                      id="name"
                      placeholder="Enter username"
                     >


          <label>Email:</label>
               <input type="email" 
                      name="email" 
                      placeholder="Enter Email"
                    >
        


     	<label>Password:</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Enter your password"><br>

          <label>Phone:</label>
          <input type="tel" 
                 name="phone" 
                 placeholder="Enter phone"><br>

                 <input type="submit" name="submit" value="SIGN UP" class="btn">
          <p>Already have an account?<a href="login" class="ca"><b>LOGIN</b></a></p>
     </form>
</body>
</html>

