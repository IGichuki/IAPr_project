<?php

// require 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>ADMIN REGISRATION</title>
<link rel="stylesheet" href="reglogin.css">
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body id="body">
  <form action="registration_admin "method="POST"> 
   @csrf
   
      <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form below.</p>
    
    <input type="text" placeholder="Enter first_name" name="first_name" id="first_name" required>
    <input type="text" placeholder="Enter last_name" name="last_name" id="last_name" required>

    <p>
    <input type="text" placeholder="Enter Email" name="email" id="email" required></p>
    
    <p>
    <input type="password" placeholder=" password input" name="password" id="password" required></p>

    
    <tr>
      <td>
        phone number;
      </td>
      <td>
        <select>
          <option>254</option>
          <option>221</option>
          <option>231</option>
          <option>271</option>
          <option>324</option>
        </select>
        <input type="phone number" placeholder=" 26627..."name="contact_no">

      </td>
    </tr> <br><br>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button onclick="window.location.href='login-admin'">return</button>
  
   <button type="submit" id="registerbtn">Register</button>
  

  <div id="ClassSignIN">
    <p>Already have an account? <a href=" login-admin">log in</a>.</p>
  </div>
</div>

</form>

  


</body>