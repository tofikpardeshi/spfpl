<?php

if(isset($_POST['submit']))
{
      $name = $_POST['name'];
      $email = $_POST['email'];
      $number = $_POST['number'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];

      if($name == '' || $email =='' || $number == '' || $subject == '' || $message == '' )
      {
            echo "<script>alert('All Filed Required')</script>";
      }
      else{
            $from = 'SPFPL ';
            $webmaster = 'spfinance@shapoorji.com';
            $to = "tofik.pardeshi@neologicx.com";

            $sub = "Contact Us";

            $headers = "From: ".$name." <".$email.">\r\n"; $headers = "Reply-To: ".$_POST['email']."\r\n"; 
            $headers = "Content-type: text/html; charset=iso-8859-1\r\n";
            'X-Mailer: PHP/' . phpversion();

            $mes = "
        <html>
        <head>
        <title></title>
        </head>
        <body>
        
        
        
        <table>
        <tr>
        <th style='text-align:justify'>Name : </th>
        <th style='text-align:justify'>".$_POST['name']."</th>
        </tr>
        
        
        <tr>
        <th style='text-align:justify'>Email : </th>
        <th style='text-align:justify'>".$_POST['email']."</th>
        </tr>
        
        
        <tr>
        <th style='text-align:justify'>Contact Number : </th>
        <th style='text-align:justify'>".$_POST['number']."</th>
        </tr>
        
        <tr>
        <th style='text-align:justify'>Dropdown : </th>
        <th style='text-align:justify'>".$_POST['sel1']."</th>
        </tr>
        
        <tr>
        <th style='text-align:justify'>Subject : </th>
        <th style='text-align:justify'>".$_POST['subject']."</th>
        </tr>
        
        <tr>
        <th style='text-align:justify'>Message : </th>
        <th style='text-align:justify'>".$_POST['message']."</th>
        </tr>
        
        
        
        </table>
        </body>
        </html>";

        $sendMail = mail($to, $subject, $mes, $headers);

        echo "<script>alert('Your Form submitted')</script>";

        echo "<script>window.open(index.php?sent=Your form has submmited)</script>";

        
    
      }
}

?>