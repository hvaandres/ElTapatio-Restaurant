<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['ithvaandres@gmail.com']))  {
  
  //Email information
  $admin_email = "ithvaandres@gmail.com";
  $fullName = $_REQUEST['fullName'];
  $email = $_REQUEST['email'];
  $message = $_REQUEST['message'];
  
  //send email
  mail($admin_email, "$subject", $message, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>

 <form method="post">

  fullName: <input name="fullName" type="text" />

  email: <input name="email" type="text" />

  Message:

  <textarea name="message" rows="15" cols="40"></textarea>

  <input type="submit" value="Submit" />
  </form>
  
<?php
  }
?>