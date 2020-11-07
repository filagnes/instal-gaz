<?php
  if (isset($_REQUEST['email']))  {
  
  $admin_email = "agafilam@gmail.com";
  $email = $_REQUEST['email'];
  $name = $_REQUEST['name'];
  $message = $_REQUEST['message'];
  
  mail($admin_email, $name, $message, "From:" . $email);
  
  echo "Dziękuję za wiadomość. Odpowiem najszybciej jak to będzie możliwe.";
  }
  
  else  {
?>
  
<?php
  }
?>