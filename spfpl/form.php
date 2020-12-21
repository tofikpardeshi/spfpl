<?php
if($_POST['sel1']==2){
         $to= 'muskan.verma@neologicx.com';
        }
     
        elseif($_POST['sel1']==3)
        {
        $to = 'muskan0497@gmail.com';
        }
        elseif($_POST['sel1']==4)
        {
        $to = 'tofik.pardeshi@neologicx.com';
        }
        
        
       $subject .=  $_POST['subject'].'-(Message from Website)'; 
    
 
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
        <th style='text-align:justify'>Name : </th>
        <th style='text-align:justify'>".$_POST['organisation']."</th>
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
        <th style='text-align:justify'>Message : </th>
        <th style='text-align:justify'>".$_POST['message']."</th>
        </tr>
        
        
        
        </table>
        </body>
        </html>
        ";
    
    $headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    $headers .= 'From: ' . $_POST['email']; "\r\n";

    if(mail($to, $subject, $message, $headers))
    {
    //echo json_encode(['successfully send']);
    //header('Location: index.php');
    
    }
    else 
    {
        echo json_encode(['success'=>false]);
    }
   
 
?>