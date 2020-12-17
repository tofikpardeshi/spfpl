<?php
$to = "tofik.pardeshi@neologicx.com";
$subject = "News Letter";

$meg = "
<html>
<head>
<title></title>
</head>
<body>

<tr>
<th style='text-align:justify'>Email : </th>
<th style='text-align:justify'>".$_POST['emailnews']."</th>
</tr>

</body>
<html>
";

// Always set content-type when sending HTML email
$header = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


?>