<?php

    if(isset($_REQUEST['submt']))
    {

        $to = 'mzwendodamadlopha@gmail.com';
        $subject = 'Contact Form';
        $name = $_POST["name"];
        $email = $_POST["email"];
        $enqueries = $_POST["enqueries"];
        $phone = $_POST["phone"];
        $text = $_POST["message"];

        $message = `"Name:"  $name `;

        // Send an email

        if(mail($to, $subject, $message))
        {
        
            echo '<script>alert("Your email has been sent successfully.")</script>';
        }
        else
        {
        
            echo '<script>alert("Unable to send email. Please try again.")</script>';

        }
    }

?>


<!-- upload to google ssheet -->

<!-- <script>
      function AddRow()
    {
      var name = document.getElementById("name").value;
      var email = document.getElementById("email").value;
      var phone = document.getElementById("phone").value;
      if (name==""|| email==""|| phone=="") {
        return false;
      }
      else {
      google.script.run.AddRecord(name,email,phone);
      document.write("<center><h1>You have successfully registered</h1></center>");
      }
    }
  </script> -->