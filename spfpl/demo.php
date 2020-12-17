<?php
if(isset($_POST['message'])){
    $to      = 'tofik.pardeshi@neologicx.com';
    $subject = $_POST['subject']; 
    
    $message = 
    
    $message = "
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
        </html>
        ";
    
    
    
    $headers = "From: ".$_POST['name']." <".$_POST['email'].">\r\n"; $headers = "Reply-To: ".$_POST['email']."\r\n"; 
    $headers = "Content-type: text/html; charset=iso-8859-1\r\n";
    'X-Mailer: PHP/' . phpversion();
    if(mail($to, $subject, $message, $headers))
    {
    echo json_encode(['successfully send']);
    }
    else 
    {
        echo json_encode(['success'=>false]);
    }
   
 }
?>